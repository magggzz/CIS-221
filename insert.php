{"payload":{"allShortcutsEnabled":true,"fileTree":{"":{"items":[{"name":"README.md","path":"README.md","contentType":"file"},{"name":"campus.sql","path":"campus.sql","contentType":"file"},{"name":"index.html","path":"index.html","contentType":"file"},{"name":"index.php","path":"index.php","contentType":"file"},{"name":"index2.html","path":"index2.html","contentType":"file"},{"name":"insert.php","path":"insert.php","contentType":"file"},{"name":"login.php","path":"login.php","contentType":"file"},{"name":"style2.css","path":"style2.css","contentType":"file"},{"name":"style3.css","path":"style3.css","contentType":"file"},{"name":"validate2.php","path":"validate2.php","contentType":"file"},{"name":"validate3.html","path":"validate3.html","contentType":"file"},{"name":"validate_err_msg3.php","path":"validate_err_msg3.php","contentType":"file"}],"totalCount":12}},"fileTreeProcessingTime":5.7490559999999995,"foldersToFetch":[],"reducedMotionEnabled":"system","repo":{"id":701377282,"defaultBranch":"main","name":"web-development","ownerLogin":"Rissbiggy","currentUserCanPush":true,"isFork":false,"isEmpty":false,"createdAt":"2023-10-06T17:07:36.000+03:00","ownerAvatar":"https://avatars.githubusercontent.com/u/146194315?v=4","public":true,"private":false,"isOrgOwned":false},"symbolsExpanded":false,"treeExpanded":true,"refInfo":{"name":"main","listCacheKey":"v0:1697789279.0","canEdit":true,"refType":"branch","currentOid":"2dded8d8e1920548c8a9e603db92b33dbfd90921"},"path":"insert.php","currentUser":{"id":146194315,"login":"Rissbiggy","userEmail":"omosmaurice12@gmail.com"},"blob":{"rawLines":["<!DOCTYPE html>\r","<html>\r","    <body>\r","        <h1>Insert data into our table</h1>\r","    \r","        <center>\r","        <?php\r","        // Call the database file into the current file\r","        require \"dbconnect.php\";\r","\r","        // This will pick data from the user\r","        // $firstname = $_REQUEST['first_name'];\r","        // $lastname = $_REQUEST['last_name'];\r","        // $gender = $_REQUEST['gender'];\r","        // $address = $_REQUEST['address'];\r","\r","        // Insert data into the table\r","        // $sql = \"INSERT INTO staff (first_name, last_name, gender, address) VALUES ('$firstname', '$lastname', '$gender', '$address')\";\r","        $sql = \"INSERT INTO staff (first_name, last_name, gender, address) VALUES ('job', 'Alila', 'male', '123 Main St')\";\r","\r","        //\r","        //if ($conn->query($sql) === true) {\r","           // echo \"Records inserted successfully\";\r","        //} else {\r","        //    echo \"Error: \" . $conn->error;\r","       // }\r","        \r","\r","        // Close the database connection when you're done with it\r","        //$conn->close();\r","        ?>\r","        </center>\r","    </body>\r","</html>\r"],"stylingDirectives":[[{"start":0,"end":15,"cssClass":"pl-c1"},{"start":14,"end":15,"cssClass":"pl-kos"}],[{"start":0,"end":1,"cssClass":"pl-kos"},{"start":1,"end":5,"cssClass":"pl-ent"},{"start":5,"end":6,"cssClass":"pl-kos"}],[{"start":4,"end":5,"cssClass":"pl-kos"},{"start":5,"end":9,"cssClass":"pl-ent"},{"start":9,"end":10,"cssClass":"pl-kos"}],[{"start":8,"end":9,"cssClass":"pl-kos"},{"start":9,"end":11,"cssClass":"pl-ent"},{"start":11,"end":12,"cssClass":"pl-kos"},{"start":38,"end":40,"cssClass":"pl-kos"},{"start":40,"end":42,"cssClass":"pl-ent"},{"start":42,"end":43,"cssClass":"pl-kos"}],[],[{"start":8,"end":9,"cssClass":"pl-kos"},{"start":9,"end":15,"cssClass":"pl-ent"},{"start":15,"end":16,"cssClass":"pl-kos"}],[{"start":8,"end":13,"cssClass":"pl-ent"}],[{"start":8,"end":55,"cssClass":"pl-c"}],[{"start":8,"end":15,"cssClass":"pl-k"},{"start":17,"end":30,"cssClass":"pl-s"}],[],[{"start":8,"end":44,"cssClass":"pl-c"}],[{"start":8,"end":48,"cssClass":"pl-c"}],[{"start":8,"end":46,"cssClass":"pl-c"}],[{"start":8,"end":41,"cssClass":"pl-c"}],[{"start":8,"end":43,"cssClass":"pl-c"}],[],[{"start":8,"end":37,"cssClass":"pl-c"}],[{"start":8,"end":137,"cssClass":"pl-c"}],[{"start":8,"end":12,"cssClass":"pl-s1"},{"start":8,"end":9,"cssClass":"pl-c1"},{"start":16,"end":121,"cssClass":"pl-s"}],[],[{"start":8,"end":10,"cssClass":"pl-c"}],[{"start":8,"end":44,"cssClass":"pl-c"}],[{"start":11,"end":51,"cssClass":"pl-c"}],[{"start":8,"end":18,"cssClass":"pl-c"}],[{"start":8,"end":44,"cssClass":"pl-c"}],[{"start":7,"end":11,"cssClass":"pl-c"}],[],[],[{"start":8,"end":65,"cssClass":"pl-c"}],[{"start":8,"end":25,"cssClass":"pl-c"}],[{"start":8,"end":10,"cssClass":"pl-ent"}],[{"start":8,"end":10,"cssClass":"pl-kos"},{"start":10,"end":16,"cssClass":"pl-ent"},{"start":16,"end":17,"cssClass":"pl-kos"}],[{"start":4,"end":6,"cssClass":"pl-kos"},{"start":6,"end":10,"cssClass":"pl-ent"},{"start":10,"end":11,"cssClass":"pl-kos"}],[{"start":0,"end":2,"cssClass":"pl-kos"},{"start":2,"end":6,"cssClass":"pl-ent"},{"start":6,"end":7,"cssClass":"pl-kos"}]],"csv":null,"csvError":null,"dependabotInfo":{"showConfigurationBanner":null,"configFilePath":null,"networkDependabotPath":"/Rissbiggy/web-development/network/updates","dismissConfigurationNoticePath":"/settings/dismiss-notice/dependabot_configuration_notice","configurationNoticeDismissed":false,"repoAlertsPath":"/Rissbiggy/web-development/security/dependabot","repoSecurityAndAnalysisPath":"/Rissbiggy/web-development/settings/security_analysis","repoOwnerIsOrg":false,"currentUserCanAdminRepo":true},"displayName":"insert.php","displayUrl":"https://github.com/Rissbiggy/web-development/blob/main/insert.php?raw=true","headerInfo":{"blobSize":"1.08 KB","deleteInfo":{"deleteTooltip":"Delete this file"},"editInfo":{"editTooltip":"Edit this file"},"ghDesktopPath":"https://desktop.github.com","gitLfsPath":null,"onBranch":true,"shortPath":"a8c3955","siteNavLoginPath":"/login?return_to=https%3A%2F%2Fgithub.com%2FRissbiggy%2Fweb-development%2Fblob%2Fmain%2Finsert.php","isCSV":false,"isRichtext":false,"toc":null,"lineInfo":{"truncatedLoc":"34","truncatedSloc":"28"},"mode":"file"},"image":false,"isCodeownersFile":null,"isPlain":false,"isValidLegacyIssueTemplate":false,"issueTemplateHelpUrl":"https://docs.github.com/articles/about-issue-and-pull-request-templates","issueTemplate":null,"discussionTemplate":null,"language":"PHP","languageID":272,"large":false,"loggedIn":true,"newDiscussionPath":"/Rissbiggy/web-development/discussions/new","newIssuePath":"/Rissbiggy/web-development/issues/new","planSupportInfo":{"repoIsFork":null,"repoOwnedByCurrentUser":null,"requestFullPath":"/Rissbiggy/web-development/blob/main/insert.php","showFreeOrgGatedFeatureMessage":null,"showPlanSupportBanner":null,"upgradeDataAttributes":null,"upgradePath":null},"publishBannersInfo":{"dismissActionNoticePath":"/settings/dismiss-notice/publish_action_from_dockerfile","dismissStackNoticePath":"/settings/dismiss-notice/publish_stack_from_file","releasePath":"/Rissbiggy/web-development/releases/new?marketplace=true","showPublishActionBanner":false,"showPublishStackBanner":false},"rawBlobUrl":"https://github.com/Rissbiggy/web-development/raw/main/insert.php","renderImageOrRaw":false,"richText":null,"renderedFileInfo":null,"shortPath":null,"tabSize":8,"topBannersInfo":{"overridingGlobalFundingFile":false,"globalPreferredFundingPath":null,"repoOwner":"Rissbiggy","repoName":"web-development","showInvalidCitationWarning":false,"citationHelpUrl":"https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/creating-a-repository-on-github/about-citation-files","showDependabotConfigurationBanner":null,"actionsOnboardingTip":null},"truncated":false,"viewable":true,"workflowRedirectUrl":null,"symbols":{"timedOut":false,"notAnalyzed":false,"symbols":[]}},"copilotInfo":{"documentationUrl":"https://docs.github.com/copilot/overview-of-github-copilot/about-github-copilot-for-individuals","notices":{"codeViewPopover":{"dismissed":false,"dismissPath":"/settings/dismiss-notice/code_view_copilot_popover"}},"userAccess":{"accessAllowed":false,"hasSubscriptionEnded":false,"orgHasCFBAccess":false,"userHasCFIAccess":false,"userHasOrgs":false,"userIsOrgAdmin":false,"userIsOrgMember":false,"business":null,"featureRequestInfo":null}},"copilotAccessAllowed":true,"csrf_tokens":{"/Rissbiggy/web-development/branches":{"post":"7e6OxTlU3SMm11s6c_AZj5Ci0Ps3a9P9Ar5yBSnnhQbEO_EnvIwh-oJLkwoiaFgWx8r768PFlGh5lIUVcEjl9A"},"/repos/preferences":{"post":"qVyK5f4yXgrMC_e-ct0r8gSClaR-ZGbyRrtyyptQQpynWBVPnuMPznxFo2FxD0J_CFlsYgM37XAbN3J4CPAB5g"}}},"title":"web-development/insert.php at main · Rissbiggy/web-development"}