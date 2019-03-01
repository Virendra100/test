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
                        <li role="presentation" class="active"><a href="#tab_content1" id="providers-tab" role="tab" data-toggle="tab" aria-expanded="true">Providers</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="gateway-status-tab" data-toggle="tab" aria-expanded="false">Gateway Status</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="smpp-status-tab" data-toggle="tab" aria-expanded="false">Smpp Status</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="providers-tab">
                          
                          <h3>Provider Management</h3>
                          <br/>
                          <form action="" method="post" id="myform1" name="myform1">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Provider Id*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtProviderId" maxlength="8" id="txtProviderId" class="form-control form-control-mar" required maxlength="8" value="" onkeypress="return alphanum(event)" />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" id="txtUsername" name="txtUsername" value="" minlength="6" maxlength="12" required />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="password" class="form-control form-control-mar" id="txtPassword" name="txtPassword" value="" title="9NWC3rMS" maxlength="8" required pattern="^([0-9]{1})([a-zA-Z]{7})$" onkeypress="return alphanum(event)" />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="password" class="form-control form-control-mar" id="txtConfirmPassword" name="txtConfirmPassword" value="" title="9NWC3rMS" maxlength="8" required pattern="^([0-9]{1})([a-zA-Z]{7})$" onkeypress="return alphanum(event)" />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">IP/Domain*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtIP" id="txtIP" value="127.0.0.1" required />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">TR Port*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" minlength="5" maxlength="5" name="txtTR" value="" required onkeypress="return isNumberKey(event)" />
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">RX Port*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" minlength="5" maxlength="5" name="txtRX" value="" required onkeypress="return isNumberKey(event)" />
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">TRX Mode</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbTRX" class="form-control form-control-mar">
                                          <option selected="selected" value="0">DISABLED</option>
                                          <option value="1">ENABLED</option>
                                      </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">System Type*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" maxlength="10" name="txtSystemType" value="smpp" required />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Message Type</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbMessageType" class="textbox form-control form-control-mar" >
                                          <option value="0">DEC-DEC</option>
                                          <option value="1">DEC-HEX</option>
                                          <option value="2">HEX-DEC</option>
                                          <option value="3">HEX-HEX</option>
                                          <option selected="selected" value="4">STRING</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sessions</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtSession" value="1">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Source TON</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" name="txtSourceTon" class="form-control form-control-mar" value="0">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Source NPI</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtSourceNpi" value="1">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Destination TON</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" class="form-control form-control-mar" name="txtDestinationTon" value="0">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Destination NPI</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtDestinationNpi" class="form-control form-control-mar" value="1">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Enquire Interval</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" class="form-control form-control-mar" name="txtEnquireInterval" value="30">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Source Autodetect</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbAutoDetect" class="textbox form-control form-control-mar">
                                          <option selected="selected" value="0">DISABLED</option>
                                          <option value="1">ENABLED</option>
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Denied Prefix</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtDeniedPrefix" value="0">
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Allowed Prefix</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtAllowedPrefix" class="form-control form-control-mar" value="0">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Max Pending Submit</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" class="form-control form-control-mar" name="txtMaxPendingSubmit" maxlength="2" value="10">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Throughput</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtThroughput" maxlength="3" value="20">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Alt Charset</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                   <input type="text" class="form-control form-control-mar" name="txtAltCharset" maxlength="20" value="GSM">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gateway Price</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control form-control-mar" name="txtPrice" value="0.08">
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="gateway-status-tab">
                          <h3>Gateway Status</h3>
                          <br/>
                          

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="smpp-status-tab">
                          <h3>Smpp Status</h3>
                          <br/>
                          
                        </div>

                      </div>

              </div>
            </div>
          
          </div>
          <div class="clearfix"></div>