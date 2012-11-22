<% with SiteConfig %>
  <% if AddThisPubKEY %>
    <% if AddThisHeader %>
      <p>$SiteConfig.AddThisHeader</p>
    <% end_if %>
    <div class="$AddThisStyle">
      <% if AddThisFacebookBtn %>
        <a class="addthis_button_facebook_follow" addthis:userid="$AddThisFacebookBtn"></a>
      <% end_if %>
      <% if AddThisTwitterBtn %>
        <a class="addthis_button_twitter_follow" addthis:userid="$AddThisTwitterBtn"></a>
      <% end_if %>
      <% if AddThisLinkedInBtn %>
        <a class="addthis_button_linkedin_follow" addthis:userid="$AddThisLinkedInBtn"></a>
      <% end_if %>
      <% if AddThisGooglePlusBtn %>
        <a class="addthis_button_google_follow" addthis:userid="$AddThisGooglePlusBtn"></a>
      <% end_if %>
      <% if AddThisYouTubeBtn %>
        <a class="addthis_button_youtube_follow" addthis:userid="$AddThisYouTubeBtn"></a>
      <% end_if %>
      <% if AddThisFlickrBtn %>
        <a class="addthis_button_flickr_follow" addthis:userid="$AddThisFlickrBtn"></a>
      <% end_if %>
      <% if AddThisVimeoBtn %>
        <a class="addthis_button_vimeo_follow" addthis:userid="$AddThisVimeoBtn"></a>
      <% end_if %>
      <% if AddThisPinterestBtn %>
        <a class="addthis_button_pinterest_follow" addthis:userid="$AddThisPinterestBtn"></a>
      <% end_if %>
      <% if AddThisInstagramBtn %>
        <a class="addthis_button_instagram_follow" addthis:userid="$AddThisInstagramBtn"></a>
      <% end_if %>
      <% if AddThisFoursquareBtn %>
        <a class="addthis_button_foursquare_follow" addthis:userid="$AddThisFoursquareBtn"></a>
      <% end_if %>
      <% if AddThisTumblrBtn %>
        <a class="addthis_button_tumblr_follow" addthis:userid="$AddThisTumblrBtn"></a>
      <% end_if %>
      <% if AddThisRSSBtn %>
        <a class="addthis_button_rss_follow" addthis:userid="$AddThisRSSBtn"></a>
      <% end_if %>
    </div>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=$AddThisPubKEY"></script>
  <% end_if %>

<% end_with %>