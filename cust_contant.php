<?php
include('includes/viewCustomer.php');

?>
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Customers</h3>
              </div>
          
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="users-tab" role="tab" data-toggle="tab" aria-expanded="true">Users</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="reseller-tab" data-toggle="tab" aria-expanded="false">Reseller</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="reseller-user-tab" data-toggle="tab" aria-expanded="false">Reseller User's</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="users-tab">
                          
                          <h3>Add System User</h3>
                          <br/>
                          <form action="" method="post" id="Cust_User" name="Cust_User">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Id</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="textbox form-control form-control-mar" name="txtCustomerId" maxlength="10" value="" pattern="^[a-zA-Z0-9]{10}$" onkeypress="return alphanum(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Name*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtName" id="txtName" class="form-control form-control-mar" value="" onkeypress="return onlyalpha(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Company*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCompany" id="txtCompany" class="form-control form-control-mar" value=""  onkeypress="return onlyalpha(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtUsername" id="txtUsername" class="form-control form-control-mar" value="" maxlength="12" >
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="password" id="txtPassword" class="form-control form-control-mar" name="txtPassword" title="9NWC3rMS" maxlength="8"  pattern="^([0-9]{1})([a-zA-Z]{7})$" onkeypress="return alphanum(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email Id*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtEmailId" id="txtEmailId" class="form-control form-control-mar" value=""  pattern="^([a-zA-Z0-9]+@{1}[a-z]+.{1}[a-z]{2,3})$" title="Enter valid email">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtMobileNo" id="txtMobileNo" class="form-control form-control-mar" title="Eg:8975624652" pattern="[789][0-9]{9}" maxlength="10" onkeypress="return isNumberKey(event)" value="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr/>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">DND Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDndType" class="form-control form-control-mar">
                                    <option selected="selected" value="0">Promotional</option>
                                    <option value="1">Transaction</option>
                                    <option value="3">Open Trans</option>
                                    <option value="4">Open Promo</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Regular Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDefaultRoute" class="textbox form-control form-control-mar">
                                     <option value="">Choose an Gateway</option>
                                      <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Manager</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCustomersManager" class="textbox form-control form-control-mar">
                                     <option value="">Choose a Manager</option>
                                    <?php 
                                    LoadCustomersManager1($CROEmailId); ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Connection Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <select name="cmbConnectionType" class="form-control form-control-mar">
                                      <option value="0">HTTP_USER</option>
                                      <option value="1">SMPP_USER</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Credit Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCreditType" class="textbox form-control form-control-mar">
                                    <option value="0">Prepaid</option>
                                    <option value="1">Postpaid</option>
                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Delivery Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <select name="cmbDeliveryType" class="form-control form-control-mar">
                                    <option value="0">Submission</option>
                                    <option value="1">Delivery</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sms Category</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbSmsCategory" class="form-control form-control-mar">
                                    <option value="0">Promotion</option>
                                    <option value="1">TransScrub</option>
                                    <option value="2">DNDPromo</option>
                                    <option value="3">Transaction</option>
                                    <option value="4">Enterprise</option>
                                    <option value="5">Banks</option>
                                    <option value="6">Alerts</option>
                                    <option value="7">OTP</option>
                                    <option value="8">Direct</option>
                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">DB Server</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <select name="cmbDBServer" class="form-control form-control-mar">
                                    <option value="tube_Logs">DB</option>
                                    <option value="tube_Logs1">DB1</option>
                                    <option value="tube_Logs2">DB2</option>
                                    <option value="tube_Logs3">DB3</option>                                    
                                </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customers Category</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCustomerCategory" class="form-control form-control-mar">
                                    <option value="3">Silver</option>
                                    <option value="2">Gold</option>                                    
                                    <option value="1">Premium</option>                                    
                                    <option value="0">Elite</option>                                    
                                </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr/>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Bind Sessions</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtConnections" id="txtConnections" class="form-control form-control-mar" value="1" maxlength="2" pattern="^([0-9]{1,2})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Submit</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtThroughput" id="txtThroughput" class="form-control form-control-mar" value="100" maxlength="3" pattern="^([0-9]{1,3})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Credit Allotted</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCreditAlloted" class="form-control form-control-mar" id="txtCreditAlloted" size="25" maxlength="20" class="textbox" value="0" readonly="">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Balance</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtBalance" id="txtBalance" class="form-control form-control-mar" value="0" readonly="" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Add Credits</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCreditToAdd" id="txtCreditToAdd" class="form-control form-control-mar" value="0" maxlength="10" pattern="^([0-9]{1,10})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtPrice" id="txtPrice" size="25" maxlength="10" class="textbox form-control form-control-mar" value="0.1" pattern="^([0-9]{1,8}.{1}[0-9]{1,8})$" onkeypress="return isNumberDot(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Remark</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar textarea textareawd" dir="ltr" name="txtMessage" maxlength="200" size="50" rows="3" ></textarea>
                                  <input type="hidden" value="AddCust_User" name="function2call">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><input type="submit" class="btn btn-success" value="submit"></p>
                        </form>
                        <div class="scrollmenu">
                             <table id="ShowUserCustmer" class="table table-striped responsive-utilities jambo_table dataTable no-footer" cellspacing="0" width="100%" style="width:100%">
                              <thead>
                                  <tr class="selected">
                                    <th>Credit Log</th>
                                    <th>Modify</th>
                                    <th>Deactive</th>
                                    <th>Feature</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Gateway</th>
                                    <th>Price</th>
                                    <th>Balance</th>
                                    <th>Credit On</th>
                                  </tr>
                              </thead>
                              
                              <tbody>
                                  
                              </tbody>
                            </table>
                        </div><!-- scrollmenu -->
                     </div>

                      <!-- Modal -->
                          <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Update User</h4>
                                </div>
                                <div class="modal-body">
                                  <form action="" method="post" id="Cust_User" name="Cust_User">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Id</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="textbox form-control form-control-mar" name="txtCustomerId" maxlength="10" value="" pattern="^[a-zA-Z0-9]{10}$" onkeypress="return alphanum(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Name*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtName" id="txtName" class="form-control form-control-mar" value="" onkeypress="return onlyalpha(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Company*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCompany" id="txtCompany" class="form-control form-control-mar" value=""  onkeypress="return onlyalpha(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtUsername" id="txtUsername" class="form-control form-control-mar" value="" maxlength="12" >
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="password" id="txtPassword" class="form-control form-control-mar" name="txtPassword" title="9NWC3rMS" maxlength="8"  pattern="^([0-9]{1})([a-zA-Z]{7})$" onkeypress="return alphanum(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email Id*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtEmailId" id="txtEmailId" class="form-control form-control-mar" value=""  pattern="^([a-zA-Z0-9]+@{1}[a-z]+.{1}[a-z]{2,3})$" title="Enter valid email">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtMobileNo" id="txtMobileNo" class="form-control form-control-mar" title="Eg:8975624652" pattern="[789][0-9]{9}" maxlength="10" onkeypress="return isNumberKey(event)" value="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr/>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">DND Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDndType" class="form-control form-control-mar">
                                    <option selected="selected" value="0">Promotional</option>
                                    <option value="1">Transaction</option>
                                    <option value="3">Open Trans</option>
                                    <option value="4">Open Promo</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Regular Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDefaultRoute" class="textbox form-control form-control-mar">
                                     <option value="">Choose an Gateway</option>
                                      <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Manager</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCustomersManager" class="textbox form-control form-control-mar">
                                     <option value="">Choose a Manager</option>
                                    <?php 
                                    LoadCustomersManager1($CROEmailId); ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Connection Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <select name="cmbConnectionType" class="form-control form-control-mar">
                                      <option value="0">HTTP_USER</option>
                                      <option value="1">SMPP_USER</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Credit Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCreditType" class="textbox form-control form-control-mar">
                                    <option value="0">Prepaid</option>
                                    <option value="1">Postpaid</option>
                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Delivery Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <select name="cmbDeliveryType" class="form-control form-control-mar">
                                    <option value="0">Submission</option>
                                    <option value="1">Delivery</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sms Category</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbSmsCategory" class="form-control form-control-mar">
                                    <option value="0">Promotion</option>
                                    <option value="1">TransScrub</option>
                                    <option value="2">DNDPromo</option>
                                    <option value="3">Transaction</option>
                                    <option value="4">Enterprise</option>
                                    <option value="5">Banks</option>
                                    <option value="6">Alerts</option>
                                    <option value="7">OTP</option>
                                    <option value="8">Direct</option>
                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">DB Server</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <select name="cmbDBServer" class="form-control form-control-mar">
                                    <option value="tube_Logs">DB</option>
                                    <option value="tube_Logs1">DB1</option>
                                    <option value="tube_Logs2">DB2</option>
                                    <option value="tube_Logs3">DB3</option>                                    
                                </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customers Category</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCustomerCategory" class="form-control form-control-mar">
                                    <option value="3">Silver</option>
                                    <option value="2">Gold</option>                                    
                                    <option value="1">Premium</option>                                    
                                    <option value="0">Elite</option>                                    
                                </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr/>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Bind Sessions</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtConnections" id="txtConnections" class="form-control form-control-mar" value="1" maxlength="2" pattern="^([0-9]{1,2})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Submit</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtThroughput" id="txtThroughput" class="form-control form-control-mar" value="100" maxlength="3" pattern="^([0-9]{1,3})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Credit Allotted</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCreditAlloted" class="form-control form-control-mar" id="txtCreditAlloted" size="25" maxlength="20" class="textbox" value="0" readonly="">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Balance</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtBalance" id="txtBalance" class="form-control form-control-mar" value="0" readonly="" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Add Credits</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCreditToAdd" id="txtCreditToAdd" class="form-control form-control-mar" value="0" maxlength="10" pattern="^([0-9]{1,10})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtPrice" id="txtPrice" size="25" maxlength="10" class="textbox form-control form-control-mar" value="0.1" pattern="^([0-9]{1,8}.{1}[0-9]{1,8})$" onkeypress="return isNumberDot(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Remark</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar textarea textareawd" dir="ltr" name="txtMessage" maxlength="200" size="50" rows="3" ></textarea>
                                  <input type="hidden" value="AddCust_User" name="function2call">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><input type="submit" class="btn btn-success" value="submit"></p>
                        </form>
                                </div>
                                <!--<div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>-->
                              </div>

                            </div>
                          </div>
                          <!-- Modal -->

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="reseller-tab">
                          <h3>Add Reseller</h3>
                          <br/>
                          <form action="" method="post" id="Reseller_user" name="Reseller_user">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Id</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCustomerId" size="25" maxlength="10" class="textbox form-control form-control-mar" value="" pattern="^[a-zA-Z0-9]{10}$" onkeypress="return alphanum(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Reseller Name*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtName" class="form-control form-control-mar" value="" onkeypress="return onlyalpha(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Company*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCompany" class="form-control form-control-mar" value="" onkeypress="return onlyalpha(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtUsername" class="form-control form-control-mar" maxlength="10" value="" >
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="password" class="form-control form-control-mar" name="txtPassword" value="" title="9NWC3rMS" maxlength="8" pattern="^([0-9]{1})([a-zA-Z]{7})$" onkeypress="return alphanum(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email Id*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtEmailId" class="form-control form-control-mar" value="" pattern="^([a-zA-Z0-9]+@{1}[a-z]+.{1}[a-z]{2,3})$" title="Enter valid email">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Reseller Code*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" maxlength="3" class="form-control form-control-mar" name="txtCode" value="" onkeypress="return alphanum(event)" title="Eg:ZV8, H8K">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Domain*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtDomain" class="form-control form-control-mar" value="" title="(Ex- www.xyz.com)" pattern="^([a-z]{3}.[a-zA-Z0-9]+.[a-z]{2,3})$" >
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtMobileNo" class="form-control form-control-mar" value="" title="Eg:8975624652" pattern="[789][0-9]{9}" maxlength="10" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Manager</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCustomersManager" class="textbox form-control form-control-mar">
                                      <option value="">Choose a Manager</option>
                                    <?php 
                                    LoadCustomersManager1($CROEmailId); ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDefaultRoute" class="textbox form-control form-control-mar">
                                    <option value="">Choose an Gateway</option>
                                     <?php
                                      LoadDefaultRoute($DefaultRoute, $_SESSION['resellerid'], $_SESSION['distributorid']); ?>                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Cloud Reseller</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCloud" class="textbox form-control form-control-mar" >
                                    <option value="0">NON Cloud Reseller</option>
                                    <option value="1">Cloud Reseller</option>
                                </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Credit Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCreditType" class="textbox form-control form-control-mar">
                                    <option value="0">Prepaid</option>
                                    <option value="1">Postpaid</option>
                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Delivery Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDeliveryType" class="form-control form-control-mar">
                                    <option value="0">Submission</option>
                                    <option value="1">Delivery</option>
                                </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Fake Enable</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbFakeAllow" class="form-control form-control-mar">
                                    <option value="0">NO</option>
                                    <option value="1">YES</option>
                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Add Credits</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCreditToAdd" class="form-control form-control-mar" value="0" maxlength="10" pattern="^([0-9]{1,10})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtPrice" size="25" maxlength="10" class="textbox form-control form-control-mar" value="0.1" pattern="^([0-9]{1,8}.{1}[0-9]{1,8})$" onkeypress="return isNumberDot(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Balance</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtBalance" class="form-control form-control-mar" value="0" readonly="" maxlength="10" pattern="^([0-9]{1,10})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Remark</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar textarea" dir="ltr" name="txtMessage" maxlength="200" size="50" rows="3"></textarea>
                                  <input type="hidden" value="AddReseller" name="function2call">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><input type="submit" class="btn btn-success" value="submit"></p>
                        </form>
                        <div class="scrollmenu">
                             <table id="ShowReseler" class="table table-striped responsive-utilities jambo_table dataTable no-footer" cellspacing="0" width="100%" style="width:100%">
                              <thead>
                                  <tr class="selected">
                                    <th>Credit Log</th>
                                    <th>Modify</th>
                                    <th>Delete</th>
                                    <th>Feature</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Mobile No</th>
                                    <th>Gateway</th>
                                    <th>Balance</th>
                                    <th>Created On</th>
                                  </tr>
                              </thead>
                              
                              <tbody>
                                  
                              </tbody>
                            </table>
                        </div><!-- scrollmenu -->
                        </div>

                      <!--   <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="reseller-user-tab">
                          <h3>Add Reseller user</h3>
                          <br/>
                          <form action="" method="post" id="myform3" name="myform3">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Id</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="textbox form-control form-control-mar" name="txtCustomerId" size="25" maxlength="10" value="" pattern="^[a-zA-Z0-9]{10}$" onkeypress="return alphanum(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Name*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtName" id="txtName" class="form-control form-control-mar" value="" required onkeypress="return onlyalpha(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Company*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCompany" id="txtCompany" class="form-control form-control-mar" value="" required onkeypress="return onlyalpha(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtUsername" id="txtUsername" class="form-control form-control-mar" maxlength="12" value="" required>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" id="txtPassword" class="form-control form-control-mar" name="txtPassword" value="" title="9NWC3rMS" maxlength="8" required pattern="^([0-9]{1})([a-zA-Z]{7})$" onkeypress="return alphanum(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email Id*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtEmailId" id="txtEmailId" class="form-control form-control-mar" value="" required pattern="^([a-zA-Z0-9]+@{1}[a-z]+.{1}[a-z]{2,3})$" title="Enter valid email">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtMobileNo" id="txtMobileNo" class="form-control form-control-mar" value="" required title="Eg:8975624652" pattern="[789][0-9]{9}" maxlength="10" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr/>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">DND Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDndType" class="form-control form-control-mar">
                                    <option selected="selected" value="0">Promotional</option>
                                    <option value="1">Transaction</option>
                                    <option value="3">Open Trans</option>
                                    <option value="4">Open Promo</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Regular Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDefaultRoute" class="textbox form-control form-control-mar">
                                    <option value="TUBES">TUBES-TubeS</option><option value="TUBET">TUBET-TUBET</option><option value="TTEST">TTEST-TTEST</option><option value="TUBEN">TUBEN-TUBEN</option><option value="TUDND">TUDND-TUDND</option><option value="NOSPM">NOSPM-NOSPM</option><option value="TUBEP">TUBEP-TUBEP</option><option value="TTSLT">TTSLT-TTSLT</option><option value="TTSLS">TTSLS-TTSLS</option><option value="LIVEDLR">LIVEDLR-LiveDLR</option><option value="GWDEL">GWDEL-GWDEL</option><option value="RCOMT6">RCOMT6-RCOMT6</option><option value="RCOMT7">RCOMT7-RCOMT7</option><option value="RELMT">RELMT-RelianceBackupMTNL</option><option value="RELSD">RELSD-RelianceWithSpice</option><option value="RCOMT12">RCOMT12-RCOMT12</option><option value="RCOMO2">RCOMO2-RCOMO2</option><option value="RCOMP2">RCOMP2-RCOMP2</option><option value="RCOMG2">RCOMG2-RCOMG2</option><option value="SDTRA1">SDTRA1-SDTra1</option><option value="SDPRO1">SDPRO1-SDPRO1</option><option value="REROUTE">REROUTE-REROUTE</option><option value="BWOPEN">BWOPEN-BWOPEN</option><option value="MTNTRAN">MTNTRAN-MTNTRAN</option><option value="MTNLPRO">MTNLPRO-MTNLPRO</option>                                </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Manager</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCustomersManager" class="textbox form-control form-control-mar">
                                    <option value="abhishekM">abhishekM</option><option value="akash">akash</option><option value="alots">alots</option><option value="arijit">arijit</option><option value="Ashesh">Ashesh</option><option value="Bhanu">Bhanu</option><option value="Chitranshi">Chitranshi</option><option value="deepak">deepak</option><option value="Deepankar">Deepankar</option><option value="durgesh">durgesh</option><option value="firoj">firoj</option><option value="Mamtad">Mamtad</option><option value="mayank">mayank</option><option value="Praveen">Praveen</option><option value="rahuld">rahuld</option><option value="rahulp">rahulp</option><option value="Rajaram">Rajaram</option><option value="Rajendra">Rajendra</option><option value="Sandeep">Sandeep</option><option value="santosh">santosh</option><option value="Shubhanshu">Shubhanshu</option><option value="Saumat">Saumat</option><option value="stanley">stanley</option><option value="Sugriv">Sugriv</option><option value="umeshm">umeshm</option><option value="Yamini">Yamini</option>                                
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Connection Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <select name="cmbConnectionType" class="form-control form-control-mar">
                                      <option value="0">HTTP_USER</option>
                                      <option value="1">SMPP_USER</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Credit Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbCreditType" class="textbox form-control form-control-mar">
                                    <option value="0">Prepaid</option>
                                    <option value="1">Postpaid</option>
                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Delivery Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <select name="cmbDeliveryType" class="form-control form-control-mar">
                                    <option value="0">Submission</option>
                                    <option value="1">Delivery</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr/>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Bind Sessions</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtConnections" id="txtConnections" class="form-control form-control-mar" value="1" maxlength="2" pattern="^([0-9]{1,2})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Submit</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtThroughput" id="txtThroughput" class="form-control form-control-mar" value="100" maxlength="3" pattern="^([0-9]{1,3})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Credit Allotted</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCreditAlloted" class="textbox form-control form-control-mar" id="txtCreditAlloted" size="25" maxlength="20" value="0" readonly="">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Balance</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtBalance" id="txtBalance" class="form-control form-control-mar" value="0" readonly="" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Add Credits</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtCreditToAdd" id="txtCreditToAdd" class="form-control form-control-mar" value="0" maxlength="10" pattern="^([0-9]{1,10})$" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtPrice" id="txtPrice" size="25" maxlength="10" class="textbox form-control form-control-mar" value="0.1" pattern="^([0-9]{1,8}.{1}[0-9]{1,8})$" onkeypress="return isNumberDot(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Remark</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar textarea" dir="ltr" name="txtMessage" maxlength="200" size="50" rows="3"></textarea>
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