<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Uploaded File</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="file-ftp-tab" role="tab" data-toggle="tab" aria-expanded="true">File FTP</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="schedule-ftp-tab" data-toggle="tab" aria-expanded="false">Schedule FTP</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="jobwise-summ-tab" data-toggle="tab" aria-expanded="false">Jobwise Summary</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="daily-user-tab">
                          
                             <div class="scrollmenu">
                            <table id="ShowFileFTP" class="table table-striped responsive-utilities jambo_table dataTable no-footer" style="width:100%">
                              <thead>
                                  <tr class="selected">
                                    <th>Summary</th>
                                    <th>File</th>
                                    <th>Username</th>
                                    <th>Message</th>
                                    <th>Type</th>
                                    <th>Length</th>
                                    <th>Sender</th>
                                    <th>Total Count</th>
                                    <th>Queued At</th>
                                    <th>Completed At</th>
                                    <th>Total Sent</th>
                                    <th>Job Status</th>
                                  </tr>
                              </thead>
                              
                              <tbody>
                                  
                              </tbody>
                            </table>
                      </div><!-- scrollmenu -->
                          
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="schedule-ftp-tab">
                         <div class="scrollmenu">
                            <table id="ShowShedulejob" class="table table-striped responsive-utilities jambo_table dataTable no-footer" style="width:100%">
                              <thead>
                                  <tr class="selected">
                                    <th>Summary</th>
                                    <th>File</th>
                                    <th>Username</th>
                                    <th>Message</th>
                                    <th>Type</th>
                                    <th>Length</th>
                                    <th>Sender</th>
                                    <th>Total Count</th>
                                    <th>Shedule At</th>
                                    <th>Queued At</th>
                                    <th>Completed At</th>
                                    <th>Total Sent</th>
                                    <th>Job Status</th>
                                  </tr>
                              </thead>
                              
                              <tbody>
                                  
                              </tbody>
                            </table>
                      </div><!-- scrollmenu -->
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="jobwise-summ-tab">
                          <h3>Job Summary</h3>
                          <br/>
                          <form action="" method="post" id="myform3" name="myform3">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12">From*</label>
                                  <div class='input-group date col-md-9 col-sm-9 col-xs-12' id='myDatepicker6'>
                                      <input type='text' class="form-control" name="dateFrom" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)"/>
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
                                      <input type='text' class="form-control" name="dateTo" required title="Eg: 09-11-2019" pattern="^(([0-9]{2})([-]{1})([0-9]{2})([-]{1})([0-9]{4}))$" onkeypress="return isNumberHyphen(event)"/>
                                       <input type="hidden" value="ShowJobsumary" name="function2call" >
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <br/>
                          <p><input type="submit" class="btn btn-success" value="submit">Submit</p>
                        </form>
                        </div>

                      </div>
                    

              </div>
            </div>
          
          </div>
          <div class="clearfix"></div>