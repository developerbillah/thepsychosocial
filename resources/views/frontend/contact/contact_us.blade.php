@extends('frontend.front_master')
@section('content')
@section('title')
intertrade
@endsection

<!--Start Enquire Form-->
<section class="contact-page pad-tb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 v-center">
						<div class="common-heading text-l">
							<span>Contact Now</span>
							<h2 class="mt0 mb0">Have Question? Write a Message</h2>
							<p class="mb60 mt20">We will catch you as early as we receive the message</p>
						</div>
						<div class="form-block">
							<form  action="{{ route('contact-form')}}"  method="post">
                            @csrf
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" name="full_name"  placeholder="Enter name" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-6">
										<input type="email" name="email_address" id="email" placeholder="Enter email" required>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" name="mobile"  placeholder="Enter mobile" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-6">
                                    <input type="text" placeholder="Subject" name="subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="form-group">
									<textarea  name="message" rows="5" placeholder="Enter your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<button type="submit"  class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
								
								<div class="clearfix"></div>
							</form>
									</div>
								</div>
								<div class="col-lg-5 v-center">
									<div class="contact-details">
										<div class="contact-card wow fadeIn" data-wow-delay=".2s">
											<div class="info-card v-center">
												<span><i class="fas fa-phone-alt"></i> CELL:</span>
												<div class="info-body">
                                                        								<p> 146/A, HILLVIEW R/A, ROAD -8
                                                        WEST SHOLASHAHAR, PANCHLAISH
                                                        POLITECHNICAL, CHATTOGRAM-4209
                                                        BANGLADESH
                                        </p>
                                                        													<a href="tel:+880153588909 ">+880153588909</a><br>
                                                        								<a href="tel:+8801819643861">+8801819643861</a>					
												</div>
											</div>
										</div>
										<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
											<div class="info-card v-center">
												<span><i class="fas fa-envelope"></i> Email:</span>
												<div class="info-body">
													<p>Our support team will get back to in 24-h during standard business hours.</p>
													<a href="mailto:info@technovalbd.com">info@intertradebd.com</a>
												</div>
											</div>
										</div>
									
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--End Enquire Form-->


@endsection