<div class="fb-comments" data-href="$AbsoluteLink.ATT" data-notify="true" data-num-posts="$FBConfig.NumPosts" data-width="$FBConfig.CommentWidth" data-colorscheme="$FBConfig.ColorScheme"></div>
<% if FBConfig.Notify %>
    <script type="text/javascript">
        (function(){
            var oldInit = window.fbAsyncInit;
            window.fbAsyncInit = function(){
                if (typeof oldInit == 'function') oldInit();
                FB.Event.subscribe('comment.create', function(response){
                    var dummyImage = new Image;
                    dummyImage.src = '/FBCommentController/notify?page=' + encodeURIComponent(response.href);
                });
            };
        })();
    </script>
<% end_if %>