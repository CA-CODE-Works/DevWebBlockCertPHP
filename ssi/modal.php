<div class="modal fade" id="my-ca-wallet" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">My CA Wallet</h4>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
              jQuery(document).ready(function() {
                $('.my-wallet img').click( function(e){
  		             jQuery.get("devcertissuer.devblockcert.svc:9000/wallet", function(response) {
                     document.getElementById('my-ca-wallet').getElementsByClassName('modal-body')[0].innerHTML = response;
                   });
                });
              });
            </script>
