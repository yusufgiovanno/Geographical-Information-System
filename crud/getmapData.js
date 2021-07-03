var endpoint = 'filtertes.php';
var categories = [];

// Mengambil semua item, kemudian kelompokkan berdasarkan kategorinya
var getCategories = async () => {
  var dt = await fetch(endpoint);
  var { data } = await dt.json();
  data.unshift({ id_kategori: 0 });
  var grouped = data.reduce((r, arr) => {
    categories.push({ id: arr.id_kategori, nama: arr.nama_jkategori });
    arr = createLayerGroup(arr);
    r[arr.id_kategori] = [...(r[arr.id_kategori] || []), arr];
    return r;
  });
  return grouped;
};

var createLayerGroup = (arr) => {
  const icon = arr.id_kategori == '1' ? 'kemah' : 'toko';
  arr.layerGroup = L.layerGroup();
  arr.icon = L.icon({
    iconUrl: `images/${icon}.ico`,
    iconShadow: 'bayangan.ico',
    iconSize: [30, 30], // satuan pixel
  });
  return arr;
};

const getTitikBatas = (latlong) => {
  const batas = [];
  const splittedbatas = latlong.split(';');
  if (splittedbatas.length < 2) return false;
  console.log(splittedbatas);
  splittedbatas.forEach((point) => {
    const titik = point.split(',');
    const titikbatas = [titik[0].trim(), titik[1].trim()];
    batas.push(titikbatas);
  });
  return batas;
};

const createPolygon = (latlong, map) => {
  const batas = getTitikBatas(latlong);
  if (!batas) return;
  L.polygon(batas, { color: 'blue' }).addTo(map);
};

// Buat Tanda pada setiap lokasi
var createMarker = async (value) => {
  var location = await fetch(`${endpoint}?id=${value.id_jkategori}`);
  var { data } = await location.json();
  if (data.length === 0) return;
  data.forEach((item) => {
    const {
      transaksi_nama,
      transaksi_alamat,
      latitude,
      longitude,
      latlong,
    } = item;
    createPolygon(latlong, value.layerGroup);

    let point = new L.Marker([latitude, longitude], { icon: value.icon }).addTo(
      value.layerGroup,
    );
    point
      .bindPopup(`<strong>${transaksi_nama}</strong>, ${transaksi_alamat}`)
      .openPopup();
  });
};

var getData = async () => {
  var categories = await getCategories();
  return Object.entries(categories).map((v, i) => {
    if (i > 1 || !v[1]) return;
    v[1].forEach((value) => createMarker(value));
    return v[1];
  });
};

var createMap = async () => {
  var data = await getData();
  var arrayLokasi = [];
  data.forEach((v) => {
    if (v) v.forEach((itm) => arrayLokasi.push(itm));
  });
  var map = L.map('map', {
    layers: arrayLokasi.map((v) => v.layerGroup),
  }).setView([-7.9786395, 112.5617416], 12);
  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution:
      'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> for Universitas Ma Chung, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>, Modified © <a href="http://yudhikurniawan.id">Yudhi Kurniawan, GIS Specialist</a>',
  }).addTo(map);

  // Membuat daftar Overlays
  var overlays = {};
  var baseMap = {};

  // Membuat list overlay dan basemap untuk map control
  arrayLokasi.map((cv) => {
    var itm = { [cv.nama_jkategori]: cv.layerGroup };
    if (parseInt(cv.id_kategori) === 2) Object.assign(overlays, itm);
    else Object.assign(baseMap, itm);
  }, {});
  return { map, baseMap, overlays };
};

var bindOverlaysToMap = async () => {
  var { map, baseMap, overlays } = await createMap();
  L.control.layers(baseMap, overlays).addTo(map);
  var popup = L.popup();
  map.on('click', (e) => {
    popup
      .setLatLng(e.latlng)
      .setContent('Koordinat pada titik ini adalah ' + e.latlng.toString())
      .openOn(map);
  });
};

// Menunggu halaman selesai dimuat
document.addEventListener('DOMContentLoaded', async () => {
  await bindOverlaysToMap();
  var overlays = document.querySelector('.leaflet-control-layers-overlays');
  var checkbox = overlays.querySelectorAll('span');
  checkbox.forEach((item) => {
    var text = item.innerText.trim();
    item.innerHTML = `<img src="/uasfix/images/toko.ico" style="width:20px; height:20px"> ${text}`;
  });
  var basemaps = document.querySelector('.leaflet-control-layers-base');
  var radiobox = basemaps.querySelectorAll('span');
  radiobox.forEach((item) => {
    var text = item.innerText.trim();

    item.innerHTML = `<img src="/uasfix/images/kemah.ico" style="width:20px; height:20px"> ${text}`;
  });
});