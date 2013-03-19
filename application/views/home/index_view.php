<div class="main">
        <div class="span8 offset2">
        <h2 style="text-align:center"> Find your parking partner!</h2>
        <h2 style="text-align:center">SWAP your SPOT</h2>
        </div>
        <div class="span6 offset3">
            <?= form_open($submit_destination, array('class' => 'navbar-form pull-right')) ?>
                <?= ($submit_message) ? $submit_message : false ?>
                <div class="control-group">  
                    <label class="for_location"> 
                        <p>I am parking at</p>
                    </label>
                    <input name='location' class="Location span6" type="text" placeholder="Car park location" />
                </div>
                <div class="controls controls-row">
                    <div class="span3" style="margin-left:0px">
                        <label class="for_Time">I want to park at</label>
                        <input name='timestart' class="Time span3" type="time" placeholder="Time start" />
                    </div>
                    <div class="span3 inline">
                        <label class="for_Timelength">for</label>
                        <input name='timelength' class="Timelength span3" type="number" placeholder="Time length" />
                    </div>
                </div>
                <button name="button" value="true" class="btn btn-primary pull-right" type="submit">Search to SWAP</button>
            </form>
        </div>
    </div>
</div>
    
    