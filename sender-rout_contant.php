<?php
include('includes/customerDetail.php');
include('includes/viewCustomer.php');

?>
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sender Routing</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="user-sender-tab" role="tab" data-toggle="tab" aria-expanded="true">User Sender Id</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="reseller-sender-tab" data-toggle="tab" aria-expanded="false">Reseller Sender Id</a>
                          </li>
                         <!--  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="manage-temp-tab" data-toggle="tab" aria-expanded="false">Manage Template</a>
                          </li> -->
                          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="bulk-sender-tab" data-toggle="tab" aria-expanded="false">Bulk Sender Routing</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content5" role="tab" id="whitelist-sender-tab" data-toggle="tab" aria-expanded="false">Whitelist Sender</a>
                          </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="user-sender-tab">
                          
                          <h3>Manage SenderId</h3>
                          <br/>
                          <form action="" id="AddSenderRouting" method='post' name="AddSenderRouting">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbusername" class="select2_single form-control form-control-mar" tabindex="-1">
                                    <option value="" selected disabled>Select User</option> 
                                   <?php 
                                          $username = "";
                                         LoadCustomers($username); ?>    
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Regular Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbRegularGateway" class="select2_single form-control form-control-mar" id="cmbRegularGateway">
                                    <option value="">Select Gateway</option>    
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>                         
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Airtel Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbAirtelGateway" class="select2_single form-control form-control-mar" id="cmbAirtelGateway">
                                     <option value="">Select Gateway</option> 
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Voda Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbVodaGateway" class="select2_single form-control form-control-mar" id="cmbVodaGateway" >
                                  <option value="">Select Gateway</option> 
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>                          
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">DND Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDndGateway" class="select2_single form-control form-control-mar" id="cmbDndGateway" >
                                   <option value="">Select Gateway</option> 
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>
                                    </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sender Id*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea name="txtSenderId" class="form-control form-control-mar textareawd" onkeypress="return isAlphaNumComma(event)" ></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Risk Flag</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbriskFlag" class="form-control form-control-mar" id="cmbriskFlag">
                                    <option value="0">Normal</option>    
                                    <option value="1">DND-Reroute</option> 
                                    <option value="2">DND Reject</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Template Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbTempType" class="form-control form-control-mar" id="cmbTempType">
                                    <option value="0">Optional</option>
                                    <option value="1">Strict</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Entity Relationship*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" pattern="^[a-zA-Z ]{1,1000}$" name="txtRelation" title="mini-1 max-1000 characters, no special characters" id="txtRelation" value="" onkeypress="return onlyalpha(event)">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Template</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtTemplate" id="txtTemplate" value="" onkeypress="return alpha(event)">
                                   <input type="hidden" value="AddSenderRouting" name="function2call" >
                                </div>
                              </div>
                            </div>
                          </div>
                         <input type="submit" class="btn btn-success" value="Submit" />
                        </form>
                          <br/>
                          <h3>Active SenderId</h3>

                     <div class="scrollmenu">
                     <table id="ShowSenderidrouting" class="table table-striped responsive-utilities jambo_table dataTable no-footer" style="width:100%">
                         
                      <thead>
                        <tr>
                           <th>Username</th>
                            <th>Sender</th>
                            <th>Gateway(O)</th>
                            <th>Gateway(A)</th>
                            <th>Gateway(V)</th>
                            <th>Gateway(D)</th>
                            <th>Status</th>
                            <th>RiskFlag</th>
                            <th>Approve</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>


                      <tbody>
                       
                      
                      </tbody>
                    </table>
                  </div>
                        </div>

                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="reseller-sender-tab">
                          <h3>Manage SenderId & Template</h3>
                          <br/>
                          <form id="myform2" name="myform2" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbusername" class="select2_single form-control form-control-mar" onchange="go();">
                                   <?Php
                                    LoadCustomers($username);                                   
                                   ?>    
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Regular Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbRegularGateway" class="select2_single form-control form-control-mar">
                                    <option value="">Select Gateway</option> 
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>                          
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Airtel Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbAirtelGateway" class="select2_single form-control form-control-mar">
                                     <option value="">Select Gateway</option> 
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>                          
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Voda Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbVodaGateway" class="select2_single form-control form-control-mar">
                                     <option value="">Select Gateway</option> 
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>                          
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">DND Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDndGateway" class="select2_single form-control form-control-mar">
                                   <option value="">Select Gateway</option> 
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>                          
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sender Id*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea name="txtSenderId" class="form-control form-control-mar textareawd" onkeypress="return isAlphaNumComma(event)" ></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Template Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbTempType" class="form-control form-control-mar">
                                    <option value="0">Optional</option>    
                                    <option value="1">Strict</option>                           
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Entity Relationship*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtRelation" pattern="^[a-zA-Z ]{1,1000}$" title="mini-1 max-1000 characters, no special characters" value=""  onkeypress="return onlyalpha(event)">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Template</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtTemplate" value="" onkeypress="return alpha(event)">
                                  <input type="hidden" name="function2call" value="AddReselerSender">
                                </div>
                              </div>
                            </div>
                          </div>
                         <input type="submit" class="btn btn-success" value="Submit" />
                         
                        </form>
                        <br/>
                          <h3>Active SenderId</h3>
                          <hr/>
                     <div class="scrollmenu">
                     <table id="Showresellerrouting" class="table table-striped responsive-utilities jambo_table dataTable no-footer" style="width:100%">
                         
                      <thead>
                        <th>Username</th>
                        <th>Sender</th>
                        <th>Type</th>
                        <th>Regular</th>
                        <th>Dnd</th>
                        <th>Status</th>
                        <th>Approve</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </thead>


                      <tbody>
                       
                      
                      </tbody>
                    </table>
                  </div>
                        </div>

               <!--  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="manage-temp-tab">
                          <h3>Manage Template</h3>
                          <br/>
                          <form method="post" id="myform3" name="myform3" action="">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbusername" class="select2_single form-control form-control-mar">
                                    <option value="">Select</option> 
                                    <option value="durgesh">durgesh</option>
                                    <option value="virendra">virendra</option>
                                    <option value="healthcare">healthcare</option>          
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sender Id*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbusername" class="select2_single form-control form-control-mar">
                                    <option value="">Select</option> 
                                    <option value="durgesh">DHKHJHD</option>
                                    <option value="virendra">IUYYSF</option>
                                    <option value="healthcare">SYYNNDH</option>          
                                  </select>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label">Min Length</label>
                                    <div class="">
                                      <input type="number" name="number" data-validate-minmax="10,100" class="form-control form-control-mar col-md-7 col-xs-12">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <label class="control-label">Max Length</label>
                                    <div class="">
                                      <input type="number" name="number" data-validate-minmax="10,100" class="form-control form-control-mar col-md-7 col-xs-12">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <p align="center"><button type="button" class="btn btn-success">Add</button></p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Generate Regex</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbTempType" class="form-control form-control-mar">
                                    <option value="">Any</option>    
                                    <option value="">Alpha Only</option>   
                                    <option value="">Numeric Only</option>               
                                    <option value="">AlphaNumeric</option>              
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Template</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control textarea textareawd" dir="ltr" name="txtTemplate" maxlength="200" size="50" rows="2" cols="30" onkeypress="return alpha(event)"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div> -->

                      <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="bulk-sender-tab">
                          <h3>Bulk Sender Routing</h3>
                          <br/>
                          <form method="post" id="Bulk_Sender_routing" name="Bulk_Sender_routing" action="">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Change From</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbOldRoute" class="textbox form-control form-control-mar">
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sender*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control textarea textareawd" name="txtSender" onkeypress="return isAlphaNumComma(event)" rows="3" ></textarea>
                                  <p>format to add approved sender should like below, <br/>
                                    TESTIN ,
                                    BLUWAV</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Change To</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbNewRoute" class="textbox form-control form-control-mar">
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>                         
                                  </select>
                                  <input type="hidden" name="function2call" value="bulkSenderRouting">
                                </div>
                              </div>
                            </div>
                          </div>
                          <input type="submit" class="btn btn-success" value="Submit">
                        </form>
                        </div>

                    <!--     <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="whitelist-sender-tab">
                          <h3>Whitelist Sender</h3>
                          <br/>
                          <form method="post" id="myform5" name="myform5" action="">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Regular Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDefaultRoute" class="textbox form-control form-control-mar">
                                    <option value="TUBES">TUBES-TubeS</option><option value="TUBET">TUBET-TUBET</option><option value="TTEST">TTEST-TTEST</option><option value="TUBEN">TUBEN-TUBEN</option><option value="TUDND">TUDND-TUDND</option><option value="NOSPM">NOSPM-NOSPM</option><option value="TUBEP">TUBEP-TUBEP</option><option value="TTSLT">TTSLT-TTSLT</option><option value="TTSLS">TTSLS-TTSLS</option><option value="LIVEDLR">LIVEDLR-LiveDLR</option></select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sender*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar" onkeypress="return isAlphaNumComma(event)" name="txtSender" rows="3" ></textarea>
                                  <p>format to add approved sender should like below, <br/>
                                    TESTIN, 
                                    BLUWAV </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div> -->
                      </div>
                    

              </div>
            </div>
          
          </div>
          <div class="clearfix"></div>