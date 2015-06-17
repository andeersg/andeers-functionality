<?php
/**
 * Main Init Class
 */

class AF_Init {

	/**
	 * Initialize the class
	 */
	public function __construct() {

		//$register_post_types     = new AF_Register_Post_Types();
		//$register_taxonomies     = new AF_Register_Taxonomies();
		//$remove_admin_bar 	     = new AF_Remove_Admin_Bar();
		$clean_up_head		     = new AF_Clean_Up_Head();
		//$close_coments		     = new AF_Close_Comments();
		//$custom_feed_link	     = new AF_Custom_Feed_Link();
		//$insert_figure		     = new AF_Insert_Figure();
		//$auto_renew			     = new AF_RCP_Auto_Renew();
		//$long_url_spam		     = new AF_Long_URL_Spam();
		//$remove_jetpack_bar      = new AF_Remove_Jetpack_Bar();
		//$add_mime_types		     = new AF_Add_Mime_Types();
		//$remove_markdown_support = new AF_Remove_Markdown_Support();
		//$add_email_feed			 = new AF_Add_Email_Feed();
		//$increase_form_limit	 = new AF_Increase_Postmeta_Form_Limit();
		//$limit_users_delete		 = new AF_Limit_Users_Delete();
		$remove_assets			 = new AF_Remove_Unwanted_Assets();
		//$remove_post_author_url  = new AF_Remove_Post_Author_Url();
		//$allowed_tags			 = new AF_Allowed_Tags();
		
	}

}