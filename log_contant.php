<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Logs</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="user-log-tab" role="tab" data-toggle="tab" aria-expanded="true">User Log</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="user-spam-tab" data-toggle="tab" aria-expanded="false">User Spam Log</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="gateway-log-tab" data-toggle="tab" aria-expanded="false">Gateway Log</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="user-log-tab">
                          
                          <h3>Sms Logs</h3>
                          <br/>
                          <form action="" method="post" id="myform1" name="myform1">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" style="padding: 0px;">
                                  <select name="sel2E9_chzn" class="select2_single form-control form-control-mar" id="sel2E9_chzn" tabindex="-1">
                                    <option value="">Select</option> 
                                    <option value="durgesh">3waysoln</option>
                                    <option value="virendra">3waytrans</option>
                                    <option value="healthcare">abhihlth</option>          
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">From*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker2'>
                                      <input type='text' class="form-control" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)"/>
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">To*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker3'>
                                      <input type='text' class="form-control" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)"/>
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

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="user-spam-tab">
                          <h3>Spam Logs</h3>
                          <br/>
                          <form action="" method="post" id="myform2" name="myform2">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                <div class="col-md-9 col-sm-9 col-xs-12" style="padding: 0px;">
                                  <select name="sel6U2_chzn" class="select2_single form-control form-control-mar" id="sel6U2_chzn" tabindex="-1">
                                    <option value="">Select</option> 
                                    <option value="durgesh">Admin</option>
                                    <option value="virendra">Accounts</option>
                                    <option value="healthcare">Manager</option>          
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="error-desc-tab">
                          <h3>Gateway Log</h3>
                          <br/>
                          
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </div>
                      </div>
                    

              </div>
            </div>
          
          </div>
          <div class="clearfix"></div>