<?php

function bsp_new() {
 ?>
			
						<table class="form-table">
					
					<tr valign="top">
						<th colspan="2">
						
						<h3>
						<?php _e ("What's New?" , 'bbp-style-pack' ) ; ?>
						</h3>
						
						
<h4><span style="color:blue"><?php _e('Version 3.6.0', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("For those who are showing the 'topics by freshness' rather than the forum index in the root under bbpress forums settings, I've added the ability to have a 'create new topic' link. This is added by selecting the forum display item 5 - add create new topic link. " , 'bbp-style-pack') ; ?>
<p>
<?php _e("Slight change to how custom css works within the menu login/logout/register/profile - just makes the list style work better" , 'bbp-style-pack'); ?>
</p>
						
<h4><span style="color:blue"><?php _e('Version 3.5.9', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("Boring fix to allow user profile to show topics/replies created if forum display border is set to 0px in forum display" , 'bbp-style-pack'); ?>
</p>


<h4><span style="color:blue"><?php _e('Version 3.5.7', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("Technical change to improve the enqueue of the css to allow plugins such as Autoptimise to interwork" , 'bbp-style-pack'); ?>
</p>
	
						
						
<h4><span style="color:blue"><?php _e('Version 3.5.6', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("I've added Avatar sizing to the Latest Activity Widget Styling tab" , 'bbp-style-pack'); ?>
</p>
						
<h4><span style="color:blue"><?php _e('Version 3.5.5', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("A couple of technical changes, one to improve interworking with my private groups plugin, and one to help diadnose a technical issue" , 'bbp-style-pack'); ?>
</p>

<h4><span style="color:blue"><?php _e('Version 3.5.4', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("I've added a function bsp_get_user_display_role to allow for plugins to use the role display" , 'bbp-style-pack'); ?>
</p>
					
						
<h4><span style="color:blue"><?php _e('Version 3.5.3', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've improved the button display for mobiles - buttons now 'stack' when the screen is small - thanks to haiderkb fro the suggestion and code" , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. A minor fix to the activity widget where it was not linking to the latest reply if author was not shown" , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. I've added a Reset settings tab that allows you to reset a whole tab or the whole plugin." , 'bbp-style-pack'); ?>
</p>

						
<h4><span style="color:blue"><?php _e('Version 3.5.2', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("If you are using thumbnail images on your forums list (|Forum Display tab, item 10), I have now made these clickable" , 'bbp-style-pack'); ?>
</p>


<h4><span style="color:blue"><?php _e('Version 3.5.1', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("A minor change to new topic button link to allow styling" , 'bbp-style-pack'); ?>
</p>
						
						
<h4><span style="color:blue"><?php _e('Version 3.5.0', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I added styling capability to the search function. This is now in it's own tab - \'search styling \'." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I added improved styling capability for the latest activity widget.",  'bbp-style-pack'); ?>
</p>	

					
<h4><span style="color:blue"><?php _e('Version 3.4.9', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("A small fix for the topic form display if edit logs hidden", 'bbp-style-pack'); ?>
</p>
						
						
<h4><span style="color:blue"><?php _e('Version 3.4.8', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("A technical fix for themes that display topic then reply in topic listings", 'bbp-style-pack'); ?>
</p>
						
<h4><span style="color:blue"><?php _e('Version 3.4.7', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("A technical fix for login settings for foreign language", 'bbp-style-pack'); ?>
</p>
							
						
<h4><span style="color:blue"><?php _e('Version 3.4.6', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. bbpress doesn't always display the correct freshness for sub forums if a sub forum topic has been deleted or marked as spam.  I have added a correction to ensure that the correct freshness is always displayed." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I've added a save button at then top of the settings tabs, to save needing to scroll to the bottom each time !",  'bbp-style-pack'); ?>
</p>	
							
						
<h4><span style="color:blue"><?php _e('Version 3.4.5', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e(" A minor technical correction for the freshness display to allow for different sub-forum permissions for those using the private groups plugin" , 'bbp-style-pack'); ?>
</p>
						
<h4><span style="color:blue"><?php _e('Version 3.4.4', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. A tidy up if the settings tab order, to make them more logical - apologies to those who are used to where they were ! " , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I've added a filter for the freshness display for those who are also using my 'Private Groups' plugin so that correctly displays the titles if required",  'bbp-style-pack'); ?>
</p>	
						
<h4><span style="color:blue"><?php _e('Version 3.4.2', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've added 'topic rules' to the topic/reply forms.  This lets you put text in before the title on topics and/or replies and style this.  So you might want to put a 'Before posting' notice here, or just the rules, or indeed anything for wish.  See 'Topic/Reply Form' tab item 9 for details" , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. A minor correction to fix colors on lock icons and sticky topic icons",  'bbp-style-pack'); ?>
</p>						
						
						
<h4><span style="color:blue"><?php _e('Version 3.4.1', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("A small correction to the date format in freshness display tab to allow custom settings to work properly." , 'bbp-style-pack'); ?>
</p>
						
						
<h4><span style="color:blue"><?php _e('Version 3.4.0', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've added the ability to put author roles above the user display in topics and replies as Wordpress suppport does - see Forum Roles tab." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I have also added the ability to flag the original topic author in replies - again see Forum Roles tab.",  'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. I have added the ability to have background images for forum headers and footers and the odd and even entries for both forum listings and topic listings.  Whilst I don't think many people will use photos, it does allow you to create an image say with a shaded picture or one with a simple motif - see the forums index styling tab for these settings.",  'bbp-style-pack'); ?>
</p>
<p>
<?php _e("4. Finally I've added the ability to specify whether forum descriptions are beside or below forum thumbnail images fro those using this feature - see Forum Display tab item 10.",  'bbp-style-pack'); ?>
</p>
						
<h4><span style="color:blue"><?php _e('Version 3.3.10', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've improved the ability to disable edit logs when a user edits a topic or reply - you can now opt to take out either the edit log or revision reason or both  - see Topic/Reply form items 7 & 8." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I have correcetd @mentions yet again - it now uses the nicename which is the corect paramater so that it works consistently.",  'bbp-style-pack'); ?>
</p>

						
<h4><span style="color:blue"><?php _e('Version 3.3.9', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've added the ability to disable edit logs when a user edits a topic or reply  - see Topic/Reply form item 6." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I have correcetd @mentions to use the login name so that it works consistently.",  'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. I have improved how the sticky, lock and breadcrumb home icons load, to hopefully make this more consistent for users.  If these don't work for you, let me know via the plugin support page",  'bbp-style-pack'); ?>
</p>
					
						
<h4><span style="color:blue"><?php _e('Version 3.3.8', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("Minor correction to Create Topic Buttone" , 'bbp-style-pack'); ?>
</p>


<h4><span style="color:blue"><?php _e('Version 3.3.7', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've added a 'Topic Order' tab to the settings.  This lets you change the default display order of topics in forums from latest reply, to either original topic date, Title order or Author order.  Additionally there are settings to change the order for specific forums, so for instance if you have a forum for meeting minutes, you might want this forum only in topic date order so that the minutes stay in the correct sequence.  Or if for a forum on catching fish you might want the topics in alphabetical title order, so that topics on Cod or Salmon are easy to find." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I have added a spinner to the search function - see Forums Index Styling item 14 to add. ",  'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. I have improved the lock icon, so that it uses wordpress's Dashicons, so should size better - it can also now be in different colors. See Topics Index Styling tab.",  'bbp-style-pack'); ?>
</p>
<p>
<?php _e("4. The sticky icon can now alos be colored - again see Topics Index Styling tab.",  'bbp-style-pack'); ?>
</p>


						
						
						
<h4><span style="color:blue"><?php _e('Version 3.3.6', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("A correction to bsp-display-forum-index shortcode for no breadcrumb and no search parameters." , 'bbp-style-pack'); ?>
</p>						
						
						
						
<h4><span style="color:blue"><?php _e('Version 3.3.5', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("A minor correction to the Latest activity widget styling so that forum font size displays correctly." , 'bbp-style-pack'); ?>
</p>
				
						
<h4><span style="color:blue"><?php _e('Version 3.3.3/Version 3.3.4', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've added @mentions description under the author name to make it easier to reference people - this only does the display part - you will need Buddypress or the or by using the <a href = \"https://wordpress.org/plugins/bbp-mentions-email-notifications/\" target=\"_blank\"> bbp-mentions-email-notifications</a> plugin to use this." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I have added a home icon to breadcrumbs, so you can now show an icon instead of text - see breadcrumbs tab for details",  'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. I have added the ability to display sub forum descriptions in the main forums list - see Forum Display tab item 7 to see what this does.",  'bbp-style-pack'); ?>
</p>
<p>
<?php _e("4. I have improved the display when forum thumbnails are being displayed.  It now displays the description below rather than in line which looked horrible ! ",  'bbp-style-pack'); ?>
</p>
<p>
<?php _e("5. I have revised the alternate forum list, both to allow multiple levels of category, and to improve the use of classes and divs. These are techincal changes!",  'bbp-style-pack'); ?>
</p>


<h4><span style="color:blue"><?php _e('Version 3.3.2', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've added a 'Buttons' tab which lets you add 3 buttons for 'create topic', 'subscribe' and 'profile' and style these  - see 'Buttons' tab to add this." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. A new 'sticky pin' has been added - see 'Topics Index Styling' tab - item 15 to add this.", 'bbp-style-pack'); ?>
</p>


<h4><span style="color:blue"><?php _e('Version 3.3.1', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. Now comes with the ability to add thumbnail images to forum lists - see 'Forum Display' tab - item 9 to add this." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I've also stopped a fatal error if bbpress is disabled before style pack for any reason.", 'bbp-style-pack'); ?>
</p>

<h4><span style="color:blue"><?php _e('Version 3.2.9', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("Minor correction I won't bore you with!" , 'bbp-style-pack'); ?>
</p>
				
						
<h4><span style="color:blue"><?php _e('Version 3.2.8', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've added the ability to remove the forum/topic description (the part that says 'This forum contains...') - see 'Forum Display' tab - item 8 to change." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. Following feedback, I've revised how the css file gets saved to improve stability.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. On a request I've added the ability to decide where the css file is stored.  This is intended for advanced users who may have directories within wordpress that they use for user content and load faster/earlier.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("4. I've also added the ability to change when profiles are displayed.  By default bbpress/buddypress display profiles for all to see.  I've added the ability to show profiles only to logged in users, only let users see their own profile or disable profiles totally. See the Profile tab to set this.", 'bbp-style-pack'); ?>
</p>		
						
<h4><span style="color:blue"><?php _e('Version 3.2.7', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've added the ability to limit or even hide the number of revisions shown on a topic or reply.  If either a user or a mod/admin edits a topic/reply then a revision is created.  If several edits take place this can lead to multiple lines.  Within the 'Topic/Reply Styling' tab I've added a new option 12 to allow for you to choose what is shown. You can show all, none or the last n (eg say the last one)." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. On the 'Create New Topic' button in the 'Forum Display' tab the styling was 'in-line' so could not be altered.  Now it has a class of 'bsp-new-topic' allowing advanced users to add their own styling.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. When using the alternate forum template, the 'forum' heading was not styling correctly, and I have corrected this.", 'bbp-style-pack'); ?>
</p>	

						

<h4><span style="color:blue"><?php _e('Version 3.2.6', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("I've added the ability to have a different date and time format on the forum/topic lists freshness to enable for instance a shorter format to improve the display.  See the Freshness Display tab for details.", 'bbp-style-pack'); ?>
</p>


						
<h4><span style="color:blue"><?php _e('Version 3.2.5', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. Following a request, I've added the ability to format the last post date in the 'Freshness Display' tab.  You can now put date or time first, and decide on the separator, so you can have '6:20pm on 5th August', '5th August at 6.20pm' '6.20pm : 6th August' or whatever you wish.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I've also added a lock symbol for closed topics in a forum list.  To set this go to the 'Topics Index Styling' and you'll see a new option 14 and how it displays in the forum.  You can set its size to suit your forum styling.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. In the background I've improved how the plugin updates work as some people were losing style changes on updates.", 'bbp-style-pack'); ?>
</p>	

						
<h4><span style="color:blue"><?php _e('Version 3.2.4', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("I've added Forum ID's to the forum list in Dashboard>Forums.  This makes it very easy to find a forum ID to use in shortcodes and widgets", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("I've also made a small addition to allow removal of space between the username and the role when displaying topics and replies.  Where users are either using images or adding other information removing this space can make the display look better.  See the Forum Roles tab for this new feature", 'bbp-style-pack'); ?>
</p>				
						
						
<h4><span style="color:blue"><?php _e('Version 3.2.3', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("The shortcode [[bsp-display-topic-index] has been improved to allow for diaplying topics with no replies, and allow for multiple pages if desired - see the 'Shortcodes' tab for details", 'bbp-style-pack'); ?>
</p>
						
<h4><span style="color:blue"><?php _e('Version 3.2.2', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("Minor correction to the way stylesheet is handled", 'bbp-style-pack'); ?>
</p>

<h4><span style="color:blue"><?php _e('Version 3.2.1', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("Minor correction to error in 3.2.0", 'bbp-style-pack'); ?>
</p>
	
 						
<h4><span style="color:blue"><?php _e('Version 3.2.0', 'bbp-style-pack' ) ; ?></span></h4>

<p>
<?php _e("Several new features in this release", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("1. First of  all this tab - to help when you upgrade to see what new can be done, or what has been fixed.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('2. I have also added a tab called "Other bbpress plugins".  This lists other plugins by me, and some by other authors that you might want to use.', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('3. You will find another tab called "Plugin Information". If you contact me for suppport, I might ask you to let me know what is in this page, and it has a copy button so that you can send me your settings. This will help me see how you are using the Style Pack plugin, and if needed let me set up my test site with your settings to help you with a problem.', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('4. On the "Topic/Reply Form" tab, I have added 2 new items :  ', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('a. The first is to let you change the wording once "Submit" is pressed and add a spinner if you wish.  Without this, when a user presses submit, nothing seems to happen, and if the link is slow, the user can think that they have not pressed it.  You can change the wording to for instance "Submitting" and then the user knows that it is working.
', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('b. Also on this tab you can change the "Notify me of follow-up replies by email".  At present by default this is unticked, which means thay users have to tick it.  Often they forget to do this.  You can now select to have this turned on by default, so that it is ticked for them.  Of course they can then untick it if they they want emails on replies.' , 'bbp-style-pack'); ?>
</p>


 

 <?php
}
