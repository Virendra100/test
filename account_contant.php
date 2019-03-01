<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Accounting</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="closing-bal-tab" role="tab" data-toggle="tab" aria-expanded="true">Closing Balance</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="daily-credit-tab" data-toggle="tab" aria-expanded="false">Daily Credit</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="invoicing-tab" data-toggle="tab" aria-expanded="false">Invoicing</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="closing-bal-tab">
                          
                          <h3>Closing Balance</h3>
                          <br/>
                          <form action="" method="post" id="myform1" name="myform1">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">For*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker2'>
                                      <input type='text' class="form-control" required="" title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)" />
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <br/>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="daily-credit-tab">
                          <h3>Customer Credit History</h3>
                          <br/>
                          <form action="" method="post" id="myform2" name="myform2">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">From*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker4'>
                                      <input type='text' class="form-control" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)" />
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">To*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker5'>
                                      <input type='text' class="form-control" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)" />
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <br/>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="invoicing-tab">
                          <h3>Invoice Details</h3>
                          <br/>
                          <form action="" method="post" id="myform3" name="myform3">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">User Id</label>
                                  <input class="form-control form-control-mar" name="userId" placeholder="users unique usename" type="text" value="">
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Concern Person*</label>
                                  <input class="form-control form-control-mar" name="contact" placeholder="name of contact person" type="text" value="" required onkeypress="return onlyalpha(event)"/>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Id</label>
                                  <input class="form-control form-control-mar" name="cId" placeholder="customers acount id" type="text" value="" maxlength="10" pattern="^[a-zA-Z0-9]{10}$" onkeypress="return alphanum(event)">
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Company</label>
                                  <input class="form-control form-control-mar" name="company" placeholder="Insert here your Company Name" type="text" value="" onkeypress="return onlyalpha(event)">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Company Address*</label>
                                  <input class="form-control form-control-mar" name="address" placeholder="Insert here your Company Address" type="text" value="" required onkeypress="return alpha(event)">
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                  <input class="form-control form-control-mar" name="email" placeholder="Insert here your Email" type="text" value="" pattern="^([a-zA-Z0-9]+@{1}[a-z]+.{1}[a-z]{2,3})$" title="Enter valid email">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number*</label>
                                  <input class="form-control form-control-mar" name="telephone" placeholder="Insert here your mobile number" type="text" value="" title="Eg:8975624652, 9876778987..." pattern="[789][0-9]{9}" maxlength="10" onkeypress="return isNumberKey(event)">
                              </div>
                            </div>
                          </div>
                          <hr/>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Item*</label>
                                  <input name="item" id="item" placeholder="Item" type="text" class="form-control form-control-mar" required pattern="^([a-zA-Z0-9]{1,50})$" onkeypress="return alphanum(event)" />
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantity*</label>
                                  <input name="quantity" placeholder="item purchase quantity" type="text" id="quantity" class="form-control form-control-mar" maxlength="5" required pattern="^([0-9]{1,5})$" onkeypress="return isNumberKey(event)" />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Price*</label>
                                  <input type="text" name="price" id="price" class="form-control form-control-mar" maxlength="10" required pattern="^(\d*\.)?\d+$" placeholder="unit price of item" onkeypress="return isNumberDot(event)" />
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Vat*</label>
                                  <input name="vat" id="vat" placeholder="Insert here your VAT" type="text" class="form-control form-control-mar" maxlength="10" required pattern="^(\d*\.)?\d+$" onkeypress="return isNumberDot(event)" />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Price*</label>
                                  <input name="tprice" id="tprice" placeholder="unit price of item multiplied by quantity" type="text" class="form-control form-control-mar" required pattern="^(\d*\.)?\d+$" onkeypress="return isNumberDot(event)" />
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Bank*</label>
                                  <input name="bank" id="bank" placeholder="Insert the name of your Bank" type="text" class="form-control form-control-mar" required onkeypress="return onlyalpha(event)" />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">IBAN*</label>
                                  <input name="iban" id="iban" placeholder="Insert here your IBAN number" type="text" class="form-control form-control-mar" required />
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Account No*</label>
                                  <input name="account" id="account" placeholder="Insert here your account number" type="text" class="form-control form-control-mar" required />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Remark*</label>
                                  <input name="remark" id="remark" placeholder="Add a comment" type="text" class="form-control form-control-mar" required />
                              </div>
                            </div>
                          </div>
                          <br/>
                          <p><button type="submit" class="btn btn-success">Create Your Invoice</button></p>
                        </form>
                        </div>

                      </div>
                    

              </div>
            </div>
          
          </div>
          <div class="clearfix"></div>