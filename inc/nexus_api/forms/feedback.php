<?php include(nexus_plugin_inc('nexus_api/data/nexus_options.php')); // Nexus Overall Options ?>
<?php include(nexus_plugin_inc('nexus_api/data/current_user.php')); // Current User Details ?>
<?php
    if (get_post_type($postID) == 'nexus_complete') {
    $authID = get_post_field( 'post_author', $postID );
    if ($cuID == $authID) { $client = 'yes'; } else { $client = 'na'; }
    if ($cuTYPE == 'designer') { $client = 'no'; }
        
    if (($client == 'yes' && !get_post_meta($postID, 'nexus_request_feedback',true)) || ($client == 'no' && !get_post_meta($postID, 'nexus_client_feedback',true))) {
?>

<div class="pure-g fullWidth">

    <div class="pure-u-5-5 tbs requestHeader">
        <h1 class="newRequestTitle txtWhite"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAYAAABXuSs3AAAFSUlEQVRogbWafYiVRRTGn1Xb1HQtTUPQUtTNdbNt02ozKtOFSMLoQ4qMSCwi+sAQSsh1F9cks5Q+pRJNElQK27KI8A8NAinENrItE11My680VyqytX79MXPdd+fOvHfey90HBu57zjPnnHfuzJkzc28ZoBKjQtJeSf3sc4eksZLOlNJJr1IasxgvaZikgbaNkFRZaifFBP6ipKYUfXWkLIeltmUDENP6AvcB39GFOwLcl8nHkgD33gTnG+AeoDwmptjAKzzBAEzwcLd4eJs8vNqAzf6lDFzABx4nvwHnW30N8AhwwsM7BjwMXGm5A4HTHt57sfGUEZ9Vpkra5pG3STotqS7Szg5JF0sa59HVSfoqxkiWwCXpiKRLsnTIgAOSRsWSs2aVRRn5WbAwC7mPR3aBpD8D/NEF7O2RtFPSPkknrWyIpDGSJis9n/umTg4DJP3RTeJM+tuB43aR3OboXg1kgU7gNeDaiEV1PfAm8G/A1ooEt8zGs8EmgelJW67hdsfQPmABsDTgaBMwKiJgt40BNgdsNgPPeWL5MRT46wFDITxeRMBuezqjz2W5vsnFeaLA/E1ilqQ3MvBDWClpdgZ+x7lPzgjMinjrx0ow0llH/iwwM9nHZ6QW+DVgYEsPBJ1rWwM+DwBXuPyQkUHATsfAf8CFRQRUg8kOfQrwhnqC3gEM8PFDG1CHpH8c2duSTmWawQaPSnpfUu8CvOOS1jmyv+Tm7xwCb1/pefuqAiM2nq6CK9k6MYWXgOoCNq7y+L00y4jf4jzvl/RDymgtsvonHHm9zO48RdLdknZLak6x0yrpkCOb5mUCQ4A6YA7wEvAp8Lvz1u8GRqgKaLWc/cAUR/+t1QmYDOy1z+3ATQGbGxzfJ4BPgOXAQ8B1wGABRz1fj4uFjvFy4NmEfqUngMFWt8aRJ3fhVcBwR98cEc9RRZAgf5dssfI2AnMQs8sR0A8Ddln9NkcXtZsWe8r/WGa1V0l6Xub6wcUzMjX2z468UtJbkmoltUta5ujLoiIADkW8YINn1CowRVYO8zGHamEqOTA7cXJ6PZXgr/LYFOZgXQgHhTn/1QL3206bMaVtEusCTgTMwJSdAE1WlpsGSd6TVnYSqE+xt9HxfRRz3l2MuRWoAQaEOs91OrenOMq1VzB5uq/t42aiiZgKtHcBO784vmf7eKHOY8lHXr0QaC9YfmjRprVJHr8jswQu4EvHwOoIx+WWe6SIoAWsd3xuDXFDWWWozNkzibky58fUtS5phaR5UZmhO4YrvzavkHSR31P+29SRvzhz+LzIkYxp2wM+DwNXu3y38+xA5yTm9UDQCyL8JlNrt8BDB2IfvCu9yDYng9/GXL/kHO/nnUt+rJc0P9MM9mOBpDUZ+OXnPjlvv9d5wzZM7dAYGIEWTO2edZQnYKpQHxZiduE9jnx30oZr8FbMBrAamObolgccAbwD3Fgg2DJgKqZaDGGp06ceWIs5A9+c1PkuPc+T1Bn4qhZLakj5Ktsl7ZL/Cm6SpMtS+jZIWpIyRbodJX13h6GgJXNbm4bRKny/GMLBFJ17/s18zXxMZnPqCRySNDKWnKUeny5/0K2SvshgZ7vM2dPFCEk3RFspsKCSrYV8HAF6WX0V8CBdJW4Sh4EHgMstty+mvHWxMTae2KAHBbLAOA/3o8iAqgM2o368ip0qf0u6UyZj5DBD5hdkFz9Fyr6XdFfi+WtJMyWdjQnIl1V8OCOpxbZmmRumzwJc3/z1ySTpQ0mNMmutKTIWSdmzSgyukRm9JCYqHHxR6InAB8pMof72+ZTM7zsl/RPC/7pNme/opfTBAAAAAElFTkSuQmCC" /><?php echo get_the_title($postID); ?> Feedback Form</h1> 
    </div>

</div>

<div class="pure-g">

    <div class="pure-u-5-5" id="feedbackForm">

        <div class="pure-u-5-5">&nbsp;</div>

        <form name="feedback" id="feedback" class="nexus_ajaxForm" data-function="nexus_leaveFeedback">
            <div class="pure-g">
                <div class="pure-u-5-5 pure-u-md-16-24 leftFormContent">
                    <div class="form-style-7 TEST">
                        <label for="feedbackText">Feedback</label>
                        <textarea name="feedbackText"></textarea>
                        <span>Add feedback description</span>
                    </div>
                </div>
                <div class="pure-u-5-5 pure-u-md-8-24 rightFormContent">
                    <div class="form-style-7 TEST">
                        <label for="rating">Rating</label>
                        <div class="pure-g">
                            <div class="pure-u-5-5 pure-u-md-14-24">
                                <div class="star-rating">
                                    <fieldset>
                                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding" class="starLabel">5 stars</label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good" class="starLabel">4 stars</label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good" class="starLabel">3 stars</label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor" class="starLabel">2 stars</label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor" class="starLabel">1 star</label>
                                    </fieldset>
                                </div>
                            </div> 
                            <div class="pure-u-5-5 pure-u-md-10-24">
                                <input type="hidden" name="projectID" value="<?php echo $postID; ?>" />
                                <input type="hidden" name="client" value="<?php echo $client; ?>" />
                                <a href="#feedback" data-validate="true" class="cta nexus_ajaxSubmit green txtC" style="margin-top:7px;">SUBMIT</a>
                            </div> 
                        </div> 
                        <span>Add request rating &amp; submit</span>
                    </div>
                </div>
            </div> 
        </form>
    </div>
    
</div>
<?php } } ?>