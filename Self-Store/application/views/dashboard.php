 <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total</div>
                                            <div class="widget-subheading">Total</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $total; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Occupied</div>
                                            <div class="widget-subheading">Total</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $occupied; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Available</div>
                                            <div class="widget-subheading">Total</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $available; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Products Sold</div>
                                            <div class="widget-subheading">Revenue streams</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                <!-- Navigation panel starts here -->
                
                
                <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Notification</h5>
                                        <div class="row">
                                            <div class="col">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item"><a href="<?php echo base_url();?>index.php/reservation/viewNotifications" class="nav-link"><span>Reservations</span>
                                                        <div class="ml-auto badge badge-warning"><?php echo $count; ?></div>
                                                        </a>
                                                    </li>                                                    
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Customers
                                                        <div class="ml-auto badge badge-success">New</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled">Issues</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <ul class="nav flex-column">
                                                    
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-book"> </i><span>Paymets Due</span>
                                                        <div class="ml-auto badge badge-pill badge-danger"><?php echo $payment; ?></div>
                                                    </a></li>
                                                    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                      <!-- Navigation Ends here-->
                      
                      