<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Utility</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="test-sms-tab" role="tab" data-toggle="tab" aria-expanded="true">Test Sms</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="spam-check-tab" data-toggle="tab" aria-expanded="false">Spam Check</a>
                        </li>
                       <!--  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="noti-alert-tab" data-toggle="tab" aria-expanded="false">Notifications & Alerts</a>
                        </li> -->
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="ip-whitelist-tab" data-toggle="tab" aria-expanded="false">IP Whitelist</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="block-num-tab" data-toggle="tab" aria-expanded="false">Block Number</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="test-sms-tab">
                          
                          <h3>Daily Gateway Statistic</h3>
                          <br/>
                          <form id="myform1" name="myform1" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sender</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" id="txtSender" name="txtSender" onkeypress="return alphanum(event)" />
                                </div>
                              </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Gateway</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">
                                <select name="cmbDefaultRoute" class="form-control form-control-mar" id="cmbDefaultRoute">
                                   <option value="" selected disabled>Choose an Gateway</option>
                                    <?php /*include('includes/viewCustomer.php');
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']);*/ ?>
                                    </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" title="Eg:8975624652" pattern="[789][0-9]{9}" maxlength="10" id="txtMobile" name="txtMobile" onkeypress="return isNumberKey(event)" />
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Message</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" id="txtMessage" name="txtMessage" onkeypress="return alpha(event)" />
                                  <input type="hidden" value="testSMS" name="function2call" >
                                </div>
                              </div>
                            </div>
                          </div>
                         
                           <input type="submit" class="btn btn-success" value="Submit" onclick="" />
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="spam-check-tab">
                          <h3>Daily Gateway Statistic</h3>
                          <br/>
                          <form id="myform2" name="myform2" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDefaultRoute" class="form-control form-control-mar" id="cmbDefaultRoute">
                                    <option value="" selected disabled>Choose an Gateway</option>
                                      <?php include('includes/viewCustomer.php');
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>
                                     </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Message*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar textareawd" dir="ltr" name="txtMessage" maxlength="5000" size="50" rows="3" title="Type Your SMS here" required onkeypress="return alpha(event)"></textarea>
                                   <input type="hidden" value="CheckSpam" name="function2call">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><input type="submit" class="btn btn-success" value="submit" ></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="noti-alert-tab">
                          <h3>Notifications & Alerts</h3>
                          <br/>
                          <form id="myform3" name="myform3" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar textareawd" type="text" name="txtEmail" id="txtEmail" value="" rows="3"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12">
                                  <input type="radio" checked="" value="option1" id="uniform-undefined1" name="rbUser"> Users
                                </label>

                                <label class="col-md-3 col-sm-3 col-xs-12">
                                  <input type="radio" value="option2" id="uniform-undefined2" name="rbUser"> Reseller
                                </label>

                                <label class="col-md-3 col-sm-3 col-xs-12">
                                  <input type="radio" value="option3" id="uniform-undefined3" name="rbUser"> Both
                                </label>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sms</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea rows="3" class="form-control form-control-mar textareawd" type="text" name="txtSMS" id="txtSMS" value=""></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="ip-whitelist-tab">
                          <h3>IP Whitelist</h3>
                          <br/>
                          <form id="myform4" name="myform4" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDefaultRoute" class="form-control form-control-mar" id="cmbDefaultRoute">
                                 <option value="" selected disabled>Choose an Option</option>
                                     <?php include('includes/customerDetail.php');
                                         LoadCustomers($username); ?>
                                     </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">IP Address</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input class="form-control form-control-mar" type="text" maxlength="15" name="txtIPAddress" id="txtIPAddress" value="" pattern="^([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})$" required onkeypress="return isNumberDot(event)">
                                  <input type="hidden" value="IPwhitelist" name="function2call">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><input type="submit" class="btn btn-success" value="submit" >
                          </p>
                        </form>
                      <div class="scrollmenu">
                            <table id="ShowIPWhitelist" class="table table-striped responsive-utilities jambo_table dataTable no-footer" style="width:100%">
                              <thead>
                                  <tr class="selected">
                                    <th>Username</th>
                                    <th>IP</th>
                                    <th>Status</th>
                                    <th>Added By</th>
                                    <th>DateTime</th>
                                    <th>Action</th>
                                  </tr>
                              </thead>
                              
                              <tbody>
                                  
                              </tbody>
                            </table>
                      </div><!-- scrollmenu -->
                    </div>

                   <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="block-num-tab">
                          <h3>Block Number</h3>
                          <br/>
                         <form name="AddBlocknum" method="post" id="AddBlocknum" data-parsley-validate>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Number(Without 91)*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar"  type="text"  id="txtBlock" name="txtBlock" onchange="checkBlockno(this.value)" placeholder="919599XXXXXX" style="min-height:15px"></textarea>
                                  <input type="hidden" value="AddblockNum" name="function2call">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p>format to add block number should like below, <br/>
                          9860XXXXXX , 9860XXXXXX </p>
                           <input type="submit" class="btn btn-primary" value="Block Number"/>
                        </form>
                        <div class="scrollmenu">
                          <table id="ShowBlockNumber" class="table table-striped responsive-utilities jambo_table dataTable no-footer" style="width:100%">
                            <thead>
                                <tr class="selected">
                                  <th>Username</th>
                                  <th>Mobile</th>
                                  <th>Added At</th>
                                  <th>Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                
                            </tbody>
                          </table>
                        </div><!-- scrollmenu -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
      <div class="clearfix"></div>