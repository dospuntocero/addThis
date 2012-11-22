<?php

class AddThis extends DataExtension {

  static $db = array(
    "AddThisPubKEY"        => "Varchar(200)",
    'AddThisStyle'         => "Varchar",
    "AddThisHeader"        => "Varchar",
    "AddThisFacebookBtn"   => "Varchar",
    "AddThisTwitterBtn"    => "Varchar",
    "AddThisLinkedInBtn"   => "Varchar",
    "AddThisGooglePlusBtn" => "Varchar",
    "AddThisYouTubeBtn"    => "Varchar",
    "AddThisFlickrBtn"     => "Varchar",
    "AddThisVimeoBtn"      => "Varchar",
    "AddThisPinterestBtn"  => "Varchar",
    "AddThisInstagramBtn"  => "Varchar",
    "AddThisFoursquareBtn" => "Varchar",
    "AddThisTumblrBtn"     => "Varchar",
    "AddThisRSSBtn"        => "Varchar"
  );

  public function updateCMSFields(FieldList $fields) {
    
    $StyleProvider = array(
      "addthis_toolbox addthis_32x32_style addthis_default_style"  => "Horizontal Large Menu",
      "addthis_toolbox addthis_default_style"                      => "Horizontal Small Menu",
      "addthis_toolbox addthis_32x32_style addthis_vertical_style" => "Vertical Large Menu",
      "addthis_toolbox addthis_vertical_style"                     => "Vertical Small Menu"
    );
        
    $Style = new DropdownField('AddThisStyle',_t('AddThis.STYLECHOOSER',"Select your Style"),$StyleProvider);
    $Style->setEmptyString(_t('AddThis.ADDTHISSTYLE',"Please select your style"));
    
    $fields->addFieldsToTab('Root.AddThis', array(
      new TextField('AddThisPubKEY',_t('AddThis.ADDTHISPUBKEY',"AddThis Publick Key")),
      $Style,
      new TextField('AddThisHeader',_t('AddThis.HEADER',"Header")),
      new TextField('AddThisFacebookBtn',_t('AddThis.FACEBOOKBTN',"Facebook")),
      new TextField('AddThisTwitterBtn',_t('AddThis.TWITTERBTN',"Twitter")),
      new TextField('AddThisLinkedInBtn',_t('AddThis.LINKEDINBTN',"LinkedIn")),
      new TextField('AddThisGooglePlusBtn',_t('AddThis.GOOGLEPLUSBTN',"Google+")),
      new TextField('AddThisYouTubeBtn',_t('AddThis.ADDTHISYOUTUBEBTN',"Youtube")),
      new TextField('AddThisFlickrBtn',_t('AddThis.FLICKRBTN',"Flickr")),
      new TextField('AddThisVimeoBtn',_t('AddThis.VIMEOBTN',"Vimeo")),
      new TextField('AddThisPinterestBtn',_t('AddThis.PINTERESTBTN',"Pinterest")),
      new TextField('AddThisInstagramBtn',_t('AddThis.INSTAGRAMBTN',"Instagram")),
      new TextField('AddThisFoursquareBtn',_t('AddThis.FOURSQUAREBTN',"Foursquare")),
      new TextField('AddThisTumblrBtn',_t('AddThis.TUMBLRBTN',"Tumblr")),
      new TextField('AddThisRSSBtn',_t('AddThis.RSSBTN',"RSS"))
    ));

  }
}
