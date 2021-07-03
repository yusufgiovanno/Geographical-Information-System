<?php

include "conf_header.php";


?>
<div class="d-flex flex-column flex-root">
		<div class="d-flex flex-row flex-column-fluid page">
            <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
                <div class="brand flex-column-auto " id="kt_brand">
                    <a href="index.html" class="brand-logo">
                        <img alt="Logo" src="assets/media/logos/logo-light.png"/>
                    </a>
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                </g>
                            </svg><!--end::Svg Icon-->
                        </span>			
                    </button>
                </div>
                <!--struktur menu pindah ke file ini untuk mempermudah proses pemmbuatan menu-->
                <? include "conf_leftmenu.php"?>
                <!--struktur menu bagian header pindah ke file ini untuk mempermudah proses pemmbuatan menu-->
                <?  include "conf_headermenu.php"?>


	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
			<div class="row">
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">
								Basic Form Layout
							</h3>
							<div class="card-toolbar">
								<div class="example-tools justify-content-center">
									<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
									<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
								</div>
							</div>
						</div>
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
								<div class="form-group">
									<label>Full Name:</label>
									<input type="email" class="form-control form-control-solid" placeholder="Enter full name"/>
									<span class="form-text text-muted">Please enter your full name</span>
								</div>
								<div class="form-group">
									<label>Email address:</label>
									<input type="email" class="form-control form-control-solid" placeholder="Enter email"/>
									<span class="form-text text-muted">We'll never share your email with anyone else</span>
								</div>
								<div class="form-group">
									<label>Subscription</label>
									<div class="input-group input-group-solid">
										<div class="input-group-prepend"><span class="input-group-text" >$</span></div>
										<input type="text" class="form-control  form-control-solid" placeholder="99.9"/>
									</div>
								</div>
								<div class="form-group">
									<label>Communication:</label>
									<div class="checkbox-list">
										<label class="checkbox">
											<input type="checkbox"/>
											<span></span>
											Email
										</label>
										<label class="checkbox">
											<input type="checkbox"/>
											<span></span>
											SMS
										</label>
										<label class="checkbox">
											<input type="checkbox"/>
											<span></span>
											Phone
										</label>
									</div>
								</div>

								<!--begin: Code-->
								<div class="example-code mt-10">
									<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#example_code_html" >HTML</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="example_code_html" role="tabpanel">
											<div class="example-highlight"><pre style="height:400px"><code class="language-html">
											&lt;form class=&quot;form&quot;&gt;
												&lt;div class=&quot;card-body&quot;&gt;
													&lt;div class=&quot;form-group&quot;&gt;
														&lt;label&gt;Full Name:&lt;/label&gt;
														&lt;input type=&quot;email&quot; class=&quot;form-control form-control-solid&quot; placeholder=&quot;Enter full name&quot;/&gt;
														&lt;span class=&quot;form-text text-muted&quot;&gt;Please enter your full name&lt;/span&gt;
													&lt;/div&gt;
													&lt;div class=&quot;form-group&quot;&gt;
														&lt;label&gt;Email address:&lt;/label&gt;
														&lt;input type=&quot;email&quot; class=&quot;form-control form-control-solid&quot; placeholder=&quot;Enter email&quot;/&gt;
														&lt;span class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else&lt;/span&gt;
													&lt;/div&gt;
													&lt;div class=&quot;form-group&quot;&gt;
														&lt;label&gt;Subscription&lt;/label&gt;
														&lt;div class=&quot;input-group input-group-lg&quot;&gt;
															&lt;div class=&quot;input-group-prepend&quot;&gt;&lt;span class=&quot;input-group-text&quot; &gt;$&lt;/span&gt;&lt;/div&gt;
															&lt;input type=&quot;text&quot; class=&quot;form-control form-control-solid&quot; placeholder=&quot;99.9&quot;/&gt;
														&lt;/div&gt;
													&lt;/div&gt;
													&lt;div class=&quot;form-group&quot;&gt;
														&lt;label&gt;Communication:&lt;/label&gt;
														&lt;div class=&quot;checkbox-list&quot;&gt;
															&lt;label class=&quot;checkbox&quot;&gt;
																&lt;input type=&quot;checkbox&quot;/&gt;
																&lt;span&gt;&lt;/span&gt;
																Email
															&lt;/label&gt;
															&lt;label class=&quot;checkbox&quot;&gt;
																&lt;input type=&quot;checkbox&quot;/&gt;
																&lt;span&gt;&lt;/span&gt;
																SMS
															&lt;/label&gt;
															&lt;label class=&quot;checkbox&quot;&gt;
																&lt;input type=&quot;checkbox&quot;/&gt;
																&lt;span&gt;&lt;/span&gt;
																Phone
															&lt;/label&gt;
														&lt;/div&gt;
													&lt;/div&gt;
												&lt;/div&gt;
												&lt;div class=&quot;card-footer&quot;&gt;
													&lt;button type=&quot;reset&quot; class=&quot;btn btn-primary mr-2&quot;&gt;Submit&lt;/button&gt;
													&lt;button type=&quot;reset&quot; class=&quot;btn btn-secondary&quot;&gt;Cancel&lt;/button&gt;
												&lt;/div&gt;
											&lt;/form&gt;
											</code></pre></div>							</div>
									</div>
								</div>
								<!--end: Code-->
							</div>
							<div class="card-footer">
								<button type="reset" class="btn btn-primary mr-2">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->

					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">
								Horizontal Form Layout
							</h3>
							<div class="card-toolbar">
								<div class="example-tools justify-content-center">
									<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
									<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
								</div>
							</div>
						</div>
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
								<h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Customer Info:</h3>
								<div class="mb-15">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Full Name:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter full name"/>
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Email address:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter email"/>
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
									</div>
								</div>

								<h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Customer Account:</h3>
								<div class="mb-3">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Holder:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter full name"/>
											<span class="form-text text-muted">Please enter your account holder</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Contact</label>
										<div class="col-lg-6">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
												<input type="text" class="form-control" placeholder="Phone number"/>
											</div>
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-lg-3 col-form-label">Communication:</label>
										<div class="col-lg-6">
											<div class="checkbox-inline">
												<label class="checkbox">
													<input type="checkbox"/>
													<span></span>
													Email
												</label>
												<label class="checkbox">
													<input type="checkbox"/>
													<span></span>
													SMS
												</label>
												<label class="checkbox">
													<input type="checkbox"/>
													<span></span>
													Phone
												</label>
											</div>
										</div>
									</div>
								</div>

								<!--begin: Code-->
								<div class="example-code mt-10">
									<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#example_code_html_3" >HTML</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="example_code_html_3" role="tabpanel">
											<div class="example-highlight"><pre style="height:400px"><code class="language-html">
											&lt;form class=&quot;form&quot;&gt;
												&lt;div class=&quot;card-body&quot;&gt;
													&lt;h3 class=&quot;font-size-lg text-dark font-weight-bold mb-6&quot;&gt;1. Customer Info:&lt;/h3&gt;
													&lt;div class=&quot;mb-15&quot;&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Full Name:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter full name&quot;/&gt;
																&lt;span class=&quot;form-text text-muted&quot;&gt;Please enter your full name&lt;/span&gt;
															&lt;/div&gt;
														&lt;/div&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Email address:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter email&quot;/&gt;
																&lt;span class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else&lt;/span&gt;
															&lt;/div&gt;
														&lt;/div&gt;
													&lt;/div&gt;

													&lt;h3 class=&quot;font-size-lg text-dark font-weight-bold mb-6&quot;&gt;2. Customer Account:&lt;/h3&gt;
													&lt;div class=&quot;mb-3&quot;&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Holder:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter full name&quot;/&gt;
																&lt;span class=&quot;form-text text-muted&quot;&gt;Please enter your account holder&lt;/span&gt;
															&lt;/div&gt;
														&lt;/div&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Contact&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;div class=&quot;input-group&quot;&gt;
																	&lt;div class=&quot;input-group-prepend&quot;&gt;&lt;span class=&quot;input-group-text&quot;&gt;&lt;i class=&quot;la la-chain&quot;&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
																	&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Phone number&quot;/&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/div&gt;
														&lt;div class=&quot;form-group row align-items-center&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Communication:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;div class=&quot;checkbox-inline&quot;&gt;
																	&lt;label class=&quot;checkbox&quot;&gt;
																		&lt;input type=&quot;checkbox&quot;/&gt;
																		&lt;span&gt;&lt;/span&gt;
																		Email
																	&lt;/label&gt;
																	&lt;label class=&quot;checkbox&quot;&gt;
																		&lt;input type=&quot;checkbox&quot;/&gt;
																		&lt;span&gt;&lt;/span&gt;
																		SMS
																	&lt;/label&gt;
																	&lt;label class=&quot;checkbox&quot;&gt;
																		&lt;input type=&quot;checkbox&quot;/&gt;
																		&lt;span&gt;&lt;/span&gt;
																		Phone
																	&lt;/label&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/div&gt;
													&lt;/div&gt;

												&lt;/div&gt;
												&lt;div class=&quot;card-footer&quot;&gt;
													&lt;div class=&quot;row&quot;&gt;
														&lt;div class=&quot;col-lg-3&quot;&gt;&lt;/div&gt;
														&lt;div class=&quot;col-lg-6&quot;&gt;
															&lt;button type=&quot;reset&quot; class=&quot;btn btn-success mr-2&quot;&gt;Submit&lt;/button&gt;
															&lt;button type=&quot;reset&quot; class=&quot;btn btn-secondary&quot;&gt;Cancel&lt;/button&gt;
														&lt;/div&gt;
													&lt;/div&gt;
												&lt;/div&gt;
											&lt;/form&gt;
											</code></pre></div>							</div>
									</div>
								</div>
								<!--end: Code-->
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-6">
										<button type="reset" class="btn btn-success mr-2">Submit</button>
										<button type="reset" class="btn btn-secondary">Cancel</button>
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->
				</div>
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">
								Horizontal Form Layout
							</h3>
							<div class="card-toolbar">
								<div class="example-tools justify-content-center">
									<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
									<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
								</div>
							</div>
						</div>
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
								<h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Customer Info:</h3>
								<div class="mb-15">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Full Name:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter full name"/>
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Email address:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter email"/>
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
									</div>
								</div>

								<h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Customer Account:</h3>
								<div class="mb-3">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Holder:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter full name"/>
											<span class="form-text text-muted">Please enter your account holder</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Contact</label>
										<div class="col-lg-6">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
												<input type="text" class="form-control" placeholder="Phone number"/>
											</div>
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-lg-3 col-form-label">Communication:</label>
										<div class="col-lg-6">
											<div class="checkbox-inline">
												<label class="checkbox">
													<input type="checkbox"/>
													<span></span>
													Email
												</label>
												<label class="checkbox">
													<input type="checkbox"/>
													<span></span>
													SMS
												</label>
												<label class="checkbox">
													<input type="checkbox"/>
													<span></span>
													Phone
												</label>
											</div>
										</div>
									</div>
								</div>

								<!--begin: Code-->
								<div class="example-code mt-10">
									<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#example_code_html_3" >HTML</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="example_code_html_3" role="tabpanel">
											<div class="example-highlight"><pre style="height:400px"><code class="language-html">
											&lt;form class=&quot;form&quot;&gt;
												&lt;div class=&quot;card-body&quot;&gt;
													&lt;h3 class=&quot;font-size-lg text-dark font-weight-bold mb-6&quot;&gt;1. Customer Info:&lt;/h3&gt;
													&lt;div class=&quot;mb-15&quot;&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Full Name:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter full name&quot;/&gt;
																&lt;span class=&quot;form-text text-muted&quot;&gt;Please enter your full name&lt;/span&gt;
															&lt;/div&gt;
														&lt;/div&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Email address:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter email&quot;/&gt;
																&lt;span class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else&lt;/span&gt;
															&lt;/div&gt;
														&lt;/div&gt;
													&lt;/div&gt;

													&lt;h3 class=&quot;font-size-lg text-dark font-weight-bold mb-6&quot;&gt;2. Customer Account:&lt;/h3&gt;
													&lt;div class=&quot;mb-3&quot;&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Holder:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter full name&quot;/&gt;
																&lt;span class=&quot;form-text text-muted&quot;&gt;Please enter your account holder&lt;/span&gt;
															&lt;/div&gt;
														&lt;/div&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Contact&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;div class=&quot;input-group&quot;&gt;
																	&lt;div class=&quot;input-group-prepend&quot;&gt;&lt;span class=&quot;input-group-text&quot;&gt;&lt;i class=&quot;la la-chain&quot;&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
																	&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Phone number&quot;/&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/div&gt;
														&lt;div class=&quot;form-group row align-items-center&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label&quot;&gt;Communication:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;div class=&quot;checkbox-inline&quot;&gt;
																	&lt;label class=&quot;checkbox&quot;&gt;
																		&lt;input type=&quot;checkbox&quot;/&gt;
																		&lt;span&gt;&lt;/span&gt;
																		Email
																	&lt;/label&gt;
																	&lt;label class=&quot;checkbox&quot;&gt;
																		&lt;input type=&quot;checkbox&quot;/&gt;
																		&lt;span&gt;&lt;/span&gt;
																		SMS
																	&lt;/label&gt;
																	&lt;label class=&quot;checkbox&quot;&gt;
																		&lt;input type=&quot;checkbox&quot;/&gt;
																		&lt;span&gt;&lt;/span&gt;
																		Phone
																	&lt;/label&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/div&gt;
													&lt;/div&gt;

												&lt;/div&gt;
												&lt;div class=&quot;card-footer&quot;&gt;
													&lt;div class=&quot;row&quot;&gt;
														&lt;div class=&quot;col-lg-3&quot;&gt;&lt;/div&gt;
														&lt;div class=&quot;col-lg-6&quot;&gt;
															&lt;button type=&quot;reset&quot; class=&quot;btn btn-success mr-2&quot;&gt;Submit&lt;/button&gt;
															&lt;button type=&quot;reset&quot; class=&quot;btn btn-secondary&quot;&gt;Cancel&lt;/button&gt;
														&lt;/div&gt;
													&lt;/div&gt;
												&lt;/div&gt;
											&lt;/form&gt;
											</code></pre></div>							</div>
									</div>
								</div>
								<!--end: Code-->
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-6">
										<button type="reset" class="btn btn-success mr-2">Submit</button>
										<button type="reset" class="btn btn-secondary">Cancel</button>
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->

					<!--begin::Card-->
					<div class="card card-custom example example-compact">
						<div class="card-header">
							<h3 class="card-title">
								Form Label Aligment
							</h3>
							<div class="card-toolbar">
								<div class="example-tools justify-content-center">
									<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
									<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
								</div>
							</div>
						</div>
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
								<h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Customer Info:</h3>
								<div class="mb-15">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label text-right">Full Name:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter full name"/>
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label text-right">Email address:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter email"/>
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
									</div>
								</div>

								<h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Customer Account:</h3>
								<div class="mb-3">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label text-right">Holder:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter full name"/>
											<span class="form-text text-muted">Please enter your account holder</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label text-right">Contact</label>
										<div class="col-lg-6">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
												<input type="text" class="form-control" placeholder="Phone number"/>
											</div>
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-lg-3 col-form-label  text-right">Communication:</label>
										<div class="col-lg-6">
											<div class="checkbox-inline">
												<label class="checkbox">
													<input type="checkbox"/>
													<span></span>
													Email
												</label>
												<label class="checkbox">
													<input type="checkbox"/>
													<span></span>
													SMS
												</label>
												<label class="checkbox">
													<input type="checkbox"/>
													<span></span>
													Phone
												</label>
											</div>
										</div>
									</div>
								</div>

								<!--begin: Code-->
								<div class="example-code mt-10">
									<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#example_code_html_4" >HTML</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="example_code_html_4" role="tabpanel">
											<div class="example-highlight"><pre style="height:400px"><code class="language-html">
											&lt;form class=&quot;form&quot;&gt;
												&lt;div class=&quot;card-body&quot;&gt;
													&lt;h3 class=&quot;font-size-lg text-dark font-weight-bold mb-6&quot;&gt;1. Customer Info:&lt;/h3&gt;
													&lt;div class=&quot;mb-15&quot;&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label text-right&quot;&gt;Full Name:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter full name&quot;/&gt;
																&lt;span class=&quot;form-text text-muted&quot;&gt;Please enter your full name&lt;/span&gt;
															&lt;/div&gt;
														&lt;/div&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label text-right&quot;&gt;Email address:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter email&quot;/&gt;
																&lt;span class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else&lt;/span&gt;
															&lt;/div&gt;
														&lt;/div&gt;
													&lt;/div&gt;

													&lt;h3 class=&quot;font-size-lg text-dark font-weight-bold mb-6&quot;&gt;2. Customer Account:&lt;/h3&gt;
													&lt;div class=&quot;mb-3&quot;&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label text-right&quot;&gt;Holder:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Enter full name&quot;/&gt;
																&lt;span class=&quot;form-text text-muted&quot;&gt;Please enter your account holder&lt;/span&gt;
															&lt;/div&gt;
														&lt;/div&gt;
														&lt;div class=&quot;form-group row&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label text-right&quot;&gt;Contact&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;div class=&quot;input-group&quot;&gt;
																	&lt;div class=&quot;input-group-prepend&quot;&gt;&lt;span class=&quot;input-group-text&quot;&gt;&lt;i class=&quot;la la-chain&quot;&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
																	&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Phone number&quot;/&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/div&gt;
														&lt;div class=&quot;form-group row align-items-center&quot;&gt;
															&lt;label class=&quot;col-lg-3 col-form-label  text-right&quot;&gt;Communication:&lt;/label&gt;
															&lt;div class=&quot;col-lg-6&quot;&gt;
																&lt;div class=&quot;checkbox-inline&quot;&gt;
																	&lt;label class=&quot;checkbox&quot;&gt;
																		&lt;input type=&quot;checkbox&quot;/&gt;
																		&lt;span&gt;&lt;/span&gt;
																		Email
																	&lt;/label&gt;
																	&lt;label class=&quot;checkbox&quot;&gt;
																		&lt;input type=&quot;checkbox&quot;/&gt;
																		&lt;span&gt;&lt;/span&gt;
																		SMS
																	&lt;/label&gt;
																	&lt;label class=&quot;checkbox&quot;&gt;
																		&lt;input type=&quot;checkbox&quot;/&gt;
																		&lt;span&gt;&lt;/span&gt;
																		Phone
																	&lt;/label&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/div&gt;
													&lt;/div&gt;

												&lt;/div&gt;
												&lt;div class=&quot;card-footer&quot;&gt;
													&lt;div class=&quot;row&quot;&gt;
														&lt;div class=&quot;col-lg-3&quot;&gt;&lt;/div&gt;
														&lt;div class=&quot;col-lg-6&quot;&gt;
															&lt;button type=&quot;reset&quot; class=&quot;btn btn-success mr-2&quot;&gt;Submit&lt;/button&gt;
															&lt;button type=&quot;reset&quot; class=&quot;btn btn-secondary&quot;&gt;Cancel&lt;/button&gt;
														&lt;/div&gt;
													&lt;/div&gt;
												&lt;/div&gt;
											&lt;/form&gt;
											</code></pre></div>							</div>
									</div>
								</div>
								<!--end: Code-->
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-6">
										<button type="reset" class="btn btn-success mr-2">Submit</button>
										<button type="reset" class="btn btn-secondary">Cancel</button>
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->
</div>
				<!--end::Content-->

				<? include "conf_footerheader.php" ?>

<? include "conf_rightstickymenu.php"?>

<? include "conf_footer.php"?>