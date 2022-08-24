<?php
	include_once('includes/header.php');
?>

		<div id="preloader">
			<div class="sk-three-bounce">
				<div class="sk-child sk-bounce1"></div>
				<div class="sk-child sk-bounce2"></div>
				<div class="sk-child sk-bounce3"></div>
			</div>
		</div>


		<div id="main-wrapper">
			
			<!--Navbar Header Start  -->
				<div class="nav-header">
					<a href="#" class="brand-logo">
						<!-- <img class="logo-abbr" src="images/logo-white.png" alt="">
						<img class="logo-compact" src="images/logo-text-white.png" alt="">
						<img class="brand-title" src="images/logo-text-white.png" alt=""> -->
					</a>
					<div class="nav-control">
						<div class="hamburger">
						<span class="line"></span><span class="line"></span><span class="line"></span>
						</div>
					</div>
				</div>
			<!--Navbar Header End -->
			<!--==================-->

			<!--Chatbox Start  -->
				<div class="chatbox">
					<div class="chatbox-close"></div>
					<div class="custom-tab-1">
						<ul class="nav nav-tabs">
							<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
							</li>
							<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade active show" id="chat" role="tabpanel">
								<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
									<div class="card-header chat-list-header text-center">
										<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" /><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" /></g></svg></a>
									<div>
										<h6 class="mb-1">Chat List</h6>
										<p class="mb-0">Show All</p>
									</div>
										<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><circle fill="#000000" cx="5" cy="12" r="2" /><circle fill="#000000" cx="12" cy="12" r="2" /><circle fill="#000000" cx="19" cy="12" r="2" /></g></svg></a>
									</div>
									<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
										<ul class="contacts">
											<li class="name-first-letter">A</li>
											<li class="active dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<span>Archie Parker</span>
														<p>Kalid is online</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon offline"></span>
													</div>
													<div class="user_info">
													<span>Alfie Mason</span>
													<p>Taherah left 7 mins ago</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon"></span>
													</div>
														<div class="user_info">
														<span>AharlieKane</span>
														<p>Sami is online</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon offline"></span>
													</div>
													<div class="user_info">
														<span>Athan Jacoby</span>
														<p>Nargis left 30 mins ago</p>
													</div>
												</div>
											</li>
											<li class="name-first-letter">B</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon offline"></span>
													</div>
													<div class="user_info">
														<span>Bashid Samim</span>
														<p>Rashid left 50 mins ago</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<span>Breddie Ronan</span>
														<p>Kalid is online</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon offline"></span>
													</div>
													<div class="user_info">
														<span>Ceorge Carson</span>
														<p>Taherah left 7 mins ago</p>
													</div>
												</div>
											</li>
											<li class="name-first-letter">D</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<span>Darry Parker</span>
														<p>Sami is online</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon offline"></span>
													</div>
													<div class="user_info">
														<span>Denry Hunter</span>
														<p>Nargis left 30 mins ago</p>
													</div>
												</div>
											</li>
											<li class="name-first-letter">J</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon offline"></span>
													</div>
													<div class="user_info">
														<span>Jack Ronan</span>
														<p>Rashid left 50 mins ago</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<span>Jacob Tucker</span>
														<p>Kalid is online</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon offline"></span>
													</div>
													<div class="user_info">
														<span>James Logan</span>
														<p>Taherah left 7 mins ago</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<span>Joshua Weston</span>
														<p>Sami is online</p>
													</div>
												</div>
											</li>
											<li class="name-first-letter">O</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon offline"></span>
													</div>
													<div class="user_info">
														<span>Oliver Acker</span>
														<p>Nargis left 30 mins ago</p>
													</div>
												</div>
											</li>
											<li class="dz-chat-user">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
														<span class="online_icon offline"></span>
													</div>
													<div class="user_info">
														<span>Oscar Weston</span>
														<p>Rashid left 50 mins ago</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="card chat dz-chat-history-box d-none">
									<div class="card-header chat-list-header text-center">
										<a href="#" class="dz-chat-history-back">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24" /><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1" /><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " /></g></svg>
										</a>
										<div>
											<h6 class="mb-1">Chat with Khelesh</h6>
											<p class="mb-0 text-success">Online</p>
										</div>
										<div class="dropdown">
											<a href="#" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><circle fill="#000000" cx="5" cy="12" r="2" /><circle fill="#000000" cx="12" cy="12" r="2" /><circle fill="#000000" cx="19" cy="12" r="2" /></g></svg></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
												<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
												<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
												<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
											</ul>
										</div>
									</div>
									<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
										<div class="d-flex justify-content-start mb-4">
											<div class="img_cont_msg">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
											<div class="msg_cotainer">
												Hi, how are you samim?
												<span class="msg_time">8:40 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="msg_cotainer_send">
												Hi Khalid i am good tnx how about you?
												<span class="msg_time_send">8:55 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
										</div>
										<div class="d-flex justify-content-start mb-4">
											<div class="img_cont_msg">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
											<div class="msg_cotainer">
												I am good too, thank you for your chat template
												<span class="msg_time">9:00 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="msg_cotainer_send">
												You are welcome
												<span class="msg_time_send">9:05 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
										</div>
										<div class="d-flex justify-content-start mb-4">
											<div class="img_cont_msg">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
											<div class="msg_cotainer">
												I am looking for your next templates
												<span class="msg_time">9:07 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="msg_cotainer_send">
												Ok, thank you have a good day
												<span class="msg_time_send">9:10 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
										</div>
										<div class="d-flex justify-content-start mb-4">
											<div class="img_cont_msg">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
											<div class="msg_cotainer">
												Bye, see you
												<span class="msg_time">9:12 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-start mb-4">
										<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
										</div>
										<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
										</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="msg_cotainer_send">
												Hi Khalid i am good tnx how about you?
												<span class="msg_time_send">8:55 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
										</div>
										<div class="d-flex justify-content-start mb-4">
											<div class="img_cont_msg">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
											<div class="msg_cotainer">
												I am good too, thank you for your chat template
												<span class="msg_time">9:00 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="msg_cotainer_send">
												You are welcome
												<span class="msg_time_send">9:05 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
										</div>
										<div class="d-flex justify-content-start mb-4">
											<div class="img_cont_msg">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
											<div class="msg_cotainer">
												I am looking for your next templates
												<span class="msg_time">9:07 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="msg_cotainer_send">
												Ok, thank you have a good day
												<span class="msg_time_send">9:10 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
										</div>
										<div class="d-flex justify-content-start mb-4">
											<div class="img_cont_msg">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
											</div>
											<div class="msg_cotainer">
												Bye, see you
												<span class="msg_time">9:12 AM, Today</span>
											</div>
										</div>
									</div>
									<div class="card-footer type_msg">
										<div class="input-group">
											<textarea class="form-control" placeholder="Type your message..."></textarea>
											<div class="input-group-append">
												<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="alerts" role="tabpanel">
								<div class="card mb-sm-3 mb-md-0 contacts_card">
									<div class="card-header chat-list-header text-center">
										<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><circle fill="#000000" cx="5" cy="12" r="2" /><circle fill="#000000" cx="12" cy="12" r="2" /><circle fill="#000000" cx="19" cy="12" r="2" /></g></svg></a>
										<div>
											<h6 class="mb-1">Notications</h6>
											<p class="mb-0">Show All</p>
										</div>
										<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" /><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" /></g></svg></a>
									</div>
									<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
										<ul class="contacts">
											<li class="name-first-letter">SEVER STATUS</li>
											<li class="active">
												<div class="d-flex bd-highlight">
													<div class="img_cont primary">KK</div>
													<div class="user_info">
														<span>David Nester Birthday</span>
														<p class="text-primary">Today</p>
													</div>
												</div>
											</li>
											<li class="name-first-letter">SOCIAL</li>
											<li>
												<div class="d-flex bd-highlight">
													<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
													<div class="user_info">
														<span>Perfection Simplified</span>
														<p>Jame Smith commented on your status</p>
													</div>
												</div>
											</li>
											<li class="name-first-letter">SEVER STATUS</li>
											<li>
											<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
											<span>AharlieKane</span>
											<p>Sami is online</p>
											</div>
											</div>
											</li>
											<li>
											<div class="d-flex bd-highlight">
											<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
											<span>Athan Jacoby</span>
											<p>Nargis left 30 mins ago</p>
											</div>
											</div>
											</li>
										</ul>
									</div>
									<div class="card-footer"></div>
								</div>
							</div>
							<div class="tab-pane fade" id="notes">
								<div class="card mb-sm-3 mb-md-0 note_card">
									<div class="card-header chat-list-header text-center">
										<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" /><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" /></g></svg></a>
										<div>
											<h6 class="mb-1">Notes</h6>
											<p class="mb-0">Add New Nots</p>
										</div>
										<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" /><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" /></g></svg></a>
									</div>
									<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
										<ul class="contacts">
											<li class="active">
												<div class="d-flex bd-highlight">
													<div class="user_info">
														<span>New order placed..</span>
														<p>10 Aug 2021</p>
													</div>
													<div class="ml-auto">
														<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</div>
											</li>
											<li>
												<div class="d-flex bd-highlight">
													<div class="user_info">
														<span>Youtube, a video-sharing website..</span>
														<p>10 Aug 2021</p>
													</div>
													<div class="ml-auto">
														<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</div>
											</li>
											<li>
												<div class="d-flex bd-highlight">
													<div class="user_info">
														<span>john just buy your product..</span>
														<p>10 Aug 2021</p>
													</div>
													<div class="ml-auto">
														<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</div>
											</li>
											<li>
												<div class="d-flex bd-highlight">
													<div class="user_info">
														<span>Athan Jacoby</span>
														<p>10 Aug 2021</p>
													</div>
													<div class="ml-auto">
														<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			<!--Chatbox End  -->
			<!--==================-->

			<!--Header Start  -->
				<div class="header">
					<div class="header-content">
						<nav class="navbar navbar-expand">
							<div class="collapse navbar-collapse justify-content-between">
								<div class="header-left">
									<div class="search_bar dropdown">
										<!-- <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
										<i class="mdi mdi-magnify"></i></span> -->
										<div class="dropdown-menu p-0 m-0">
											<form>
												<input class="form-control" type="search" placeholder="Search" aria-label="Search">
											</form>
										</div>
									</div>
								</div>
								<ul class="navbar-nav header-right">
									<li class="nav-item dropdown notification_dropdown">
										<a class="nav-link bell dz-fullscreen" href="#">
											<svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
											<svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path></svg>
										</a>
									</li>
									<li class="nav-item dropdown notification_dropdown">
										<a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
											<svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
											<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
											<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
											</svg>
											<div class="pulse-css"></div>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
												<ul class="timeline">
													<li>
														<div class="timeline-panel">
															<div class="media mr-2">
																<img alt="image" width="50" src="images/avatar/1.jpg">
															</div>
															<div class="media-body">
																<h6 class="mb-1">Dr sultads Send you Photo</h6>
																<small class="d-block">29 July 2021 - 02:26 PM</small>
															</div>
														</div>
													</li>
													<li>
														<div class="timeline-panel">
															<div class="media mr-2 media-info">
																KG
															</div>
															<div class="media-body">
																<h6 class="mb-1">Resport created successfully</h6>
																<small class="d-block">29 July 2021 - 02:26 PM</small>
															</div>
														</div>
													</li>
													<li>
														<div class="timeline-panel">
															<div class="media mr-2 media-success">
																<i class="fa fa-home"></i>
															</div>
															<div class="media-body">
																<h6 class="mb-1">Reminder : Treatment Time!</h6>
																<small class="d-block">29 July 2021 - 02:26 PM</small>
															</div>
														</div>
													</li>
													<li>
														<div class="timeline-panel">
															<div class="media mr-2">
																<img alt="image" width="50" src="images/avatar/1.jpg">
															</div>
															<div class="media-body">
																<h6 class="mb-1">Dr sultads Send you Photo</h6>
																<small class="d-block">29 July 2021 - 02:26 PM</small>
															</div>
														</div>
													</li>
													<li>
														<div class="timeline-panel">
															<div class="media mr-2 media-danger">
																KG
															</div>
															<div class="media-body">
																<h6 class="mb-1">Resport created successfully</h6>
																<small class="d-block">29 July 2021 - 02:26 PM</small>
															</div>
														</div>
													</li>
													<li>
														<div class="timeline-panel">
															<div class="media mr-2 media-primary">
																<i class="fa fa-home"></i>
															</div>
															<div class="media-body">
																<h6 class="mb-1">Reminder : Treatment Time!</h6>
																<small class="d-block">29 July 2021 - 02:26 PM</small>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
										</div>
									</li>
									<li class="nav-item dropdown header-profile">
										<a class="nav-link" href="#" role="button" data-toggle="dropdown">
											<img src="images/profile/pic1.jpg" width="20" alt="" />
											<div class="header-info">
												<span>Hey, <strong>Joshua</strong></span>
												<small>Business Profile</small>
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="app-profile.html" class="dropdown-item ai-icon">
												<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
												<span class="ml-2">Profile </span>
											</a>
											<a href="email-inbox.html" class="dropdown-item ai-icon">
												<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
												<span class="ml-2">Inbox </span>
											</a>
											<a href="page-login.html" class="dropdown-item ai-icon">
												<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
												<span class="ml-2">Logout </span>
											</a>
										</div>
									</li>
									<li class="nav-item right-sidebar">
										<a class="nav-link bell ai-icon" href="#">
											<svg id="icon-menu" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
										</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			<!--Header End  -->
			<!--==================-->

			<!-- Sidebar Start  -->
				<div class="deznav">
					<div class="deznav-scroll">
						<ul class="metismenu" id="menu">
							<li class="nav-label first">Main Menu</li>
							<li>
									<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" /><path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" /></g></svg>
									<span class="nav-text">Dashboard</span>
									</a>
								<ul aria-expanded="false">
									<li><a href="#">Light</a></li>
									<li><a href="#">Dark</a></li>
									<!-- <li><a href="index-3.html">Mini Sidebar</a></li>
									<li><a href="index-4.html">Sidebar</a></li> -->
								</ul>
							</li>
							<li>
								<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" /><path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" /></g></svg>
									<span class="nav-text">Organization</span>
								</a>
								<ul aria-expanded="false">
									<li><a href="/org_list" id="all_org">All Organisation</a></li>
									<li><a href="/add_org">Add Organisation</a></li>
									<!-- <li><a href="index-3.html">Mini Sidebar</a></li>
									<li><a href="index-4.html">Sidebar</a></li> -->
								</ul>
							</li>
							<li>
								<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" /><path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" /></g></svg>
									<span class="nav-text">Clients</span>
								</a>
								<ul aria-expanded="false">
									<li><a href="/client_list" class="all_clients">All Clients</a></li>
									<!-- <li><a href="/add_client">Add Client</a></li> -->
									<!-- <li><a href="index-3.html">Mini Sidebar</a></li>
									<li><a href="index-4.html">Sidebar</a></li> -->
								</ul>
							</li>
							<li>
								<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" /><path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" /></g></svg>
									<span class="nav-text">Campaigns</span>
								</a>
								<ul aria-expanded="false">
									<li><a href="javascript:void(0);" class="all_org">All Campaign</a></li>
									<li><a href="index.html">Analytics</a></li>
									<!-- <li><a href="index-3.html">Mini Sidebar</a></li>
									<li><a href="index-4.html">Sidebar</a></li> -->
								</ul>
							</li>
							<li class="nav-label">Apps</li>
							<li>
								<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><polygon fill="#000000" opacity="0.3" points="5 7 5 15 19 15 19 7" /> <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3" /><path d="M5,7 L5,15 L19,15 L19,7 L5,7 Z M5.25,5 L18.75,5 C19.9926407,5 21,5.8954305 21,7 L21,15 C21,16.1045695 19.9926407,17 18.75,17 L5.25,17 C4.00735931,17 3,16.1045695 3,15 L3,7 C3,5.8954305 4.00735931,5 5.25,5 Z" fill="#000000" fill-rule="nonzero" /></g></svg>
								<span class="nav-text">Apps</span>
								</a>
								<ul aria-expanded="false">
									<li><a href="app-profile.html">Profile</a></li>
									<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
										<ul aria-expanded="false">
											<li><a href="email-compose.html">Compose</a></li>
											<li><a href="email-inbox.html">Inbox</a></li>
											<li><a href="email-read.html">Read</a></li>
										</ul>
									</li>

								</ul>
							</li>
							<li class="nav-label">Extra</li>
							<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16"></rect><path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero"></path></g></svg>
								<span class="nav-text">Pages</span>
								</a>
								<ul aria-expanded="false">
									<li><a href="page-register.html">Register</a></li>
									<li><a href="page-login.html">Login</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			<!-- Sidebar End  -->
			<!--==================-->

				<div class="content-body">
					<div id="div1" class="container-fluid">
						<?php
						
							switch ($_REQUEST['pageName']?? null) {
								case "org_list":
								case "del_org":
									include_once("components/org_list.php");
									break;
								case "client_list":
								case "del_client":
									include_once("components/client_list.php");
									break;
								case "edit_client":
								case "add_client":
									include_once("components/add_client.php");
								break;
								case "edit_org":
								case "add_org":
									include_once("components/add_org.php");
								break;
								default:
									break;
							}
						?>
					</div>
				</div>
				

			<!-- Footer Start  -->
				<div class="footer">
				<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
				</div>
				</div>
			<!-- Footer Start  -->
			<!--==================-->


		</div>
<?php
	include_once('includes/footer.php');
?>

		<!-- Javascript-->
		
		<script>

			// function loadComponent(pageName) {
			// 	$("#div1").load(pageName+".php");
			// }
			// $(window).click(function(e){
			// 	var page = e.target.id;
			// 	console.log(e.target.id);
			// 	switch (page) {
			// 		case "all_org":
			// 			loadComponent("organisationtable");
			// 			break;
			// 		case "add_org":
			// 			loadComponent("addorganization");
			// 		break;
			// 		default:
			// 			break;
			// 	}
			// });
			
		</script>
			
			<script>
				function getUrlParams(dParam) {
					var dPageURL = window.location.search.substring(1),
						dURLVariables = dPageURL.split('&'),
						dParameterName,
						i;

					for (i = 0; i < dURLVariables.length; i++) {
						dParameterName = dURLVariables[i].split('=');

						if (dParameterName[0] === dParam) {
							return dParameterName[1] === undefined ? true : decodeURIComponent(dParameterName[1]);
						}
					}
				}
				
				(function($) {
					"use strict"

					var direction =  getUrlParams('dir');
					if(direction != 'rtl')
					{direction = 'ltr'; }
					
					var dezSettingsOptions = {
						typography: "roboto",
						version: "light",
						layout: "vertical",
						headerBg: "color_1",
						navheaderBg: "color_3",
						sidebarBg: "color_1",
						sidebarStyle: "full",
						sidebarPosition: "fixed",
						headerPosition: "fixed",
						containerLayout: "wide",
						direction: direction
					};
				
					new dezSettings(dezSettingsOptions); 

					jQuery(window).on('resize',function(){
						
						var sidebar = 'full';
						var screenWidth = jQuery(window).width();
						if(screenWidth < 600){
							sidebar = 'overlay';
						}else if(screenWidth > 600  && screenWidth < 1199){
							sidebar = 'mini';
						}
						
						dezSettingsOptions.sidebarStyle = sidebar;
						
						new dezSettings(dezSettingsOptions); 
					});
					
				})(jQuery);
			</script>
		<!-- Javascript-->
	