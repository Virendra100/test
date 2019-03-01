<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Statistics</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="daily-user-tab" role="tab" data-toggle="tab" aria-expanded="true">Daily User Stats</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="daily-reseller-tab" data-toggle="tab" aria-expanded="false">Daily Reseller Stats</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="daily-gateway-tab" data-toggle="tab" aria-expanded="false">Daily Gateway Stats</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="monthly-stats-tab" data-toggle="tab" aria-expanded="false">Monthly Stats</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="daily-job-tab" data-toggle="tab" aria-expanded="false">Daily Job Stats</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="daily-user-tab">
                          
                          <h3>Daily User Stats</h3>
                          <br/>
                          <form method="post" id="myform1" name="myform1" action="">
                             <div class="col-md-4 col-sm-4 col-xs-6 pull-left">
                                <label for="select">Select Date</label><br/>
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i><span></span><b class="caret"></b>
                                <input type="text" name="ddate" id="reportrange_right" class="form-control" />
                                <input type="hidden" name="AddShowReportrange" value="AddShowReportrange">
                             </div>
                          <br/>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>



                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="daily-reseller-tab">
                          <h3>Daily Reseller Stats</h3>
                          <br/>
                          <form method="post" id="myform2" name="myform2" action="">
                            <div class="col-md-4 col-sm-4 col-xs-6 pull-left">
                              <label for="select">Select Date</label><br/>
                              <i class="glyphicon glyphicon-calendar fa fa-calendar"></i><span></span><b class="caret"></b>
                              <input type="text" name="ddate" class="form-control" />
                              <input type="hidden" name="DRstats" value="DRstats">
                            </div>
                            <br/>
                            <p><button type="submit" class="btn btn-success">Submit</button></p>
                          </form>
                          <br/>
                      <h3>Active SenderId</h3>
                      <hr/>
                      <div class="scrollmenu">
                      <table id="Showresellerrouting" class="table table-striped responsive-utilities jambo_table dataTable no-footer" style="width:100%">
                         
                            <thead>
                              <th>Resellername</th>
                              <th>Username</th>
                              <th>Submission</th>
                              <th>Delivered</th>
                              <th>Undelivered</th>
                              <th>Expired</th>
                              <th>DND</th>
                              <th>Pending</th>
                              <th>Others</th>
                            </thead>

                            <tbody>
                             
                            
                            </tbody>
                    </table>
                  </div>
              </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="daily-gateway-tab">
                          <h3>Daily Gateway Stats</h3>
                          <br/>
                          <form method="post" id="myform3" name="myform3" action="">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">From*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker6'>
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
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker7'>
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

                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="monthly-stats-tab">
                          <h3>Monthly Stats</h3>
                          <br/>
                          <form method="post" id="myform4" name="myform4" action="">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Reseller*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='monthDatepicker1'>
                                      <input type='text' class="form-control" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)"/>
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">User*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='monthDatepicker2'>
                                      <input type='text' class="form-control" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)"/>
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">For*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='monthDatepicker3'>
                                      <input type='text' class="form-control" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)"/>
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                         <input type="hidden" name="Ruser" value="Ruser">
                                      </span>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="daily-job-tab">
                          <h3>Daily Job Stats</h3>
                          <br/>
                          <form method="post" id="myform5" name="myform5" action="">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">From*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker8'>
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
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker9'>
                                      <input type='text' class="form-control" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)"/>
                                      <input type="hidden" name="Djob" value="Djob">
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
                      </div>
              </div>
            </div>
          
          </div>
          <div class="clearfix"></div>