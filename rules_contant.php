<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Rules and Roles</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="users-roles-tab" role="tab" data-toggle="tab" aria-expanded="true">Users Roles</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="spam-rules-tab" data-toggle="tab" aria-expanded="false">Spam Rules</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="error-desc-tab" data-toggle="tab" aria-expanded="false">Error Description</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="prefix-routing-tab" data-toggle="tab" aria-expanded="false">Prefix Routing</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="block-senders-tab" data-toggle="tab" aria-expanded="false">Blocked Senders</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="users-roles-tab">
                          
                          <h3>Page Permissions</h3>
                          <br/>
                          
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="spam-rules-tab">
                          <h3>Add Spam</h3>
                          <br/>
                          <form id="myform2" name="myform2" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbGateway" class="textbox form-control form-control-mar">
                                    <option value="ALL">GLOBAL</option>
                                    <option value="TUBES">TUBES-TubeS</option><option value="TUBET">TUBET-TUBET</option><option value="TTEST">TTEST-TTEST</option><option value="TUBEN">TUBEN-TUBEN</option><option value="TUDND">TUDND-TUDND</option><option value="NOSPM">NOSPM-NOSPM</option><option value="TUBEP">TUBEP-TUBEP</option><option value="TTSLT">TTSLT-TTSLT</option><option value="TTSLS">TTSLS-TTSLS</option><option value="LIVEDLR">LIVEDLR-LiveDLR</option><option value="GWDEL">GWDEL-GWDEL</option><option value="RCOMT6">RCOMT6-RCOMT6</option><option value="RCOMT7">RCOMT7-RCOMT7</option><option value="RELMT">RELMT-RelianceBackupMTNL</option><option value="RELSD">RELSD-RelianceWithSpice</option><option value="RCOMT12">RCOMT12-RCOMT12</option><option value="RCOMO2">RCOMO2-RCOMO2</option><option value="RCOMP2">RCOMP2-RCOMP2</option><option value="RCOMG2">RCOMG2-RCOMG2</option><option value="SDTRA1">SDTRA1-SDTra1</option><option value="SDPRO1">SDPRO1-SDPRO1</option><option value="REROUTE">REROUTE-REROUTE</option><option value="BWOPEN">BWOPEN-BWOPEN</option><option value="MTNTRAN">MTNTRAN-MTNTRAN</option><option value="MTNLPRO">MTNLPRO-MTNLPRO</option>                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Spam Content</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtcontent" id="txtcontent" onkeypress="return alpha(event)">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="error-desc-tab">
                          <h3>Add Error Description</h3>
                          <br/>
                          <form id="myform3" name="myform3" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Vendor</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbGateway" class="textbox form-control-mar form-control">
                                    <option value="RCOM">RCOM</option><option value="SpiceDigital">SpiceDigital</option><option value="tubelight">tubelight</option>                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Error Code</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control-mar form-control" name="txtEC" id="txtec" onkeypress="return alphanum(event)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Error Description</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtED" id="txted" onkeypress="return onlyalpha(event)">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="prefix-routing-tab">
                          <h3>Prefix Routing</h3>
                          <br/>
                          
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="block-senders-tab">
                          <h3>Block Number</h3>
                          <br/>
                          <form id="myform5" name="myform5" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Block Sender</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar" name="txtNumber" onkeypress="return isAlphaNumComma(event)" rows="3"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p>format to add block sender should like below, <br/>
                          TESTIN, BLUWAV </p>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>
                      </div>
                    

              </div>
            </div>
          
          </div>
          <div class="clearfix"></div>