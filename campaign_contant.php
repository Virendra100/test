 <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Campaign</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="single-tab" role="tab" data-toggle="tab" aria-expanded="true">Single</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="bulk-tab" data-toggle="tab" aria-expanded="false">Bulk</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="single-tab">
                          
                          <h3>Single SMS</h3>
                          <br/>
                          <form method="post" id="myform1" name="myform1" action="">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gateway</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="cmbDefaultRoute" class="form-control form-control-mar" id="cmbDefaultRoute">
                                    <option value="TUBES">TUBES-TubeS</option><option value="TUBET">TUBET-TUBET</option><option value="TTEST">TTEST-TTEST</option><option value="TUBEN">TUBEN-TUBEN</option><option value="TUDND">TUDND-TUDND</option><option value="NOSPM">NOSPM-NOSPM</option><option value="TUBEP">TUBEP-TUBEP</option><option value="TTSLT">TTSLT-TTSLT</option><option value="TTSLS">TTSLS-TTSLS</option><option value="LIVEDLR">LIVEDLR-LiveDLR</option><option value="GWDEL">GWDEL-GWDEL</option><option value="RCOMT6">RCOMT6-RCOMT6</option><option value="RCOMT7">RCOMT7-RCOMT7</option><option value="RELMT">RELMT-RelianceBackupMTNL</option><option value="RELSD">RELSD-RelianceWithSpice</option><option value="RCOMT12">RCOMT12-RCOMT12</option><option value="RCOMO2">RCOMO2-RCOMO2</option><option value="RCOMP2">RCOMP2-RCOMP2</option><option value="RCOMG2">RCOMG2-RCOMG2</option><option value="SDTRA1">SDTRA1-SDTra1</option><option value="SDPRO1">SDPRO1-SDPRO1</option><option value="REROUTE">REROUTE-REROUTE</option><option value="BWOPEN">BWOPEN-BWOPEN</option><option value="MTNTRAN">MTNTRAN-MTNTRAN</option><option value="MTNLPRO">MTNLPRO-MTNLPRO</option>                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sender</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="textbox form-control form-control-mar textareawd" rows="1" name="txtSender" id="txtSender" onkeypress="return isAlphaNumComma(event)"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile No</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="textbox form-control form-control-mar textareawd" rows="1" name="txtMobile" maxlength="70000" placeholder="919860XXXXXX" id="txtPassword" onkeypress="return isNumComma(event)"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                                <label class="type-radio-lbl">
                                  <input type="radio" checked="" value="option1" id="uniform-radio1" name="cmbMessageType"> TEXT
                                </label>

                                <label class="type-radio-lbl">
                                  <input type="radio" value="option2" id="uniform-radio2" name="cmbMessageType"> FLASH
                                </label>

                                <label class="type-radio-lbl">
                                  <input type="radio" value="option3" id="uniform-radio3" name="cmbMessageType"> UNICODE
                                </label>

                                <label class="type-radio-lbl">
                                  <input type="radio" value="option4" id="uniform-radio4" name="cmbMessageType"> UNI-FlASH
                                </label>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Message</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar textarea textareawd" dir="ltr" name="txtMessage" maxlength="5000" size="50" rows="1" onblur="javascript:setCounter(); document.frmSendSms.codePoints.value = convertChar2CP(document.frmSendSms.txtMessage.value); &amp; #10; document.frmSendSms.UTF16.value = convertCP2UTF16(document.frmSendSms.codePoints.value); &amp; #10; return false;" onclick="javascript:setCounter(); document.frmSendSms.codePoints.value = convertChar2CP(document.frmSendSms.txtMessage.value); &amp; #10; document.frmSendSms.UTF16.value = convertCP2UTF16(document.frmSendSms.codePoints.value); &amp; #10; return false;" onkeyup=" javascript:setCounter(); document.frmSendSms.codePoints.value = convertChar2CP(document.frmSendSms.txtMessage.value); &amp; #10; document.frmSendSms.UTF16.value = convertCP2UTF16(document.frmSendSms.codePoints.value); &amp; #10; return false;" title="Type Your SMS here" onkeypress="return alpha(event)"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Characters</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtcount" value="" size="30" title="Number Of SMS Characters and Message Count is displayed here" class="form-control form-control-mar" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="bulk-tab">
                          <h3>Bulk SMS</h3>
                          <br/>
                          <form method="post" id="myform2" name="myform2" action="">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">User*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="txtUser" class="form-control form-control-mar" required maxlength="6" onchange="window.location.href='blast_sms.php?iUser='+this.value">
                                <option value="durgesh">durgesh</option><option value="virendra">virendra</option><option value="level6">level6</option><option value="health1">health1</option><option value="health2">health2</option><option value="coxkings">coxkings</option><option value="pathkind">pathkind</option><option value="quickstock">quickstock</option><option value="ticketg">ticketg</option><option value="skincity">skincity</option><option value="matrimony">matrimony</option><option value="matrimonyT">matrimonyT</option><option value="haidatechT">haidatechT</option><option value="FCSLS">FCSLS</option><option value="adindia">adindia</option>                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sender*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select name="txtSender" class="form-control form-control-mar" required maxlength="6">
                                <option value="AWAYSH">AWAYSH</option><option value="AWORLD">AWORLD</option><option value="BKZONE">BKZONE</option><option value="GATSII">GATSII</option><option value="GATSII">GATSII</option><option value="HLPDSK">HLPDSK</option><option value="PGBAMU">PGBAMU</option><option value="PGBAMU">PGBAMU</option><option value="SATYAM">SATYAM</option><option value="TESTIN">TESTIN</option></select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Type*</label>
                                <label class="type-radio-lbl">
                                  <input type="radio" checked="" value="option1" id="uniform-ty-radio1" name="cmbRadioType"> TEXT
                                </label>

                                <label class="type-radio-lbl">
                                  <input type="radio" value="option2" id="uniform-ty-radio2" name="cmbRadioType"> FLASH
                                </label>

                                <label class="type-radio-lbl">
                                  <input type="radio" value="option3" id="uniform-ty-radio3" name="cmbRadioType"> UNICODE
                                </label>

                                <label class="type-radio-lbl">
                                  <input type="radio" value="option4" id="uniform-ty-radio4" name="cmbRadioType"> UNI-FlASH
                                </label>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Message*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control form-control-mar textarea textareawd" required dir="ltr" name="txtMessage" maxlength="5000" size="50" rows="1" onblur="javascript:setCounter(); document.frmSendSms.codePoints.value = convertChar2CP(document.frmSendSms.txtMessage.value);
                                     document.frmSendSms.UTF16.value = convertCP2UTF16(document.frmSendSms.codePoints.value );
                                     return false;" onclick="javascript:setCounter();  document.frmSendSms.codePoints.value = convertChar2CP(document.frmSendSms.txtMessage.value);
                                     document.frmSendSms.UTF16.value = convertCP2UTF16( document.frmSendSms.codePoints.value );
                                     return false;" onkeyup=" javascript:setCounter();   document.frmSendSms.codePoints.value = convertChar2CP(document.frmSendSms.txtMessage.value);
                                     document.frmSendSms.UTF16.value = convertCP2UTF16( document.frmSendSms.codePoints.value );
                                     return false;" title="Type Your SMS here" onkeypress="return alpha(event)"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Characters</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" name="txtcount" value="" size="30" onfocus="document.frmSendSms.txtMessage.focus();" title="Number Of SMS Characters and Message Count is displayed here" class="form-control form-control-mar" onkeypress="return isNumberKey(event)">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Attach file*</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <label class="attach-file"><img src="images/file.png">
                                    <span>Choose File</span>
                                    <input type="file" name="fileToUpload" size="NaN" required />
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Schedule</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <!-- <input type="checkbox" name="chkSchedule" value="1"> -->
                                  <label class="">
                                    <div class="icheckbox_flat-green checked" style="position: relative;">
                                      <input type="checkbox" name="chkSchedule" class="flat" style="position: absolute; opacity: 0;" />
                                      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                  </label>
                                  <div class="input-group date" id="myDatepicker">
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-success">Submit</button></p>
                        </form>
                        </div>
                      </div>
                    

              </div>
            </div>
          
          </div>
          <div class="clearfix"></div>