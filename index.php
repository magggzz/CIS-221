{"payload":{"allShortcutsEnabled":true,"fileTree":{"":{"items":[{"name":"README.md","path":"README.md","contentType":"file"},{"name":"campus.sql","path":"campus.sql","contentType":"file"},{"name":"index.html","path":"index.html","contentType":"file"},{"name":"index.php","path":"index.php","contentType":"file"},{"name":"index2.html","path":"index2.html","contentType":"file"},{"name":"insert.php","path":"insert.php","contentType":"file"},{"name":"login.php","path":"login.php","contentType":"file"},{"name":"style2.css","path":"style2.css","contentType":"file"},{"name":"style3.css","path":"style3.css","contentType":"file"},{"name":"validate2.php","path":"validate2.php","contentType":"file"},{"name":"validate3.html","path":"validate3.html","contentType":"file"},{"name":"validate_err_msg3.php","path":"validate_err_msg3.php","contentType":"file"}],"totalCount":12}},"fileTreeProcessingTime":2.552204,"foldersToFetch":[],"reducedMotionEnabled":"system","repo":{"id":701377282,"defaultBranch":"main","name":"web-development","ownerLogin":"Rissbiggy","currentUserCanPush":true,"isFork":false,"isEmpty":false,"createdAt":"2023-10-06T17:07:36.000+03:00","ownerAvatar":"https://avatars.githubusercontent.com/u/146194315?v=4","public":true,"private":false,"isOrgOwned":false},"symbolsExpanded":false,"treeExpanded":true,"refInfo":{"name":"main","listCacheKey":"v0:1697789279.0","canEdit":true,"refType":"branch","currentOid":"2dded8d8e1920548c8a9e603db92b33dbfd90921"},"path":"index.php","currentUser":{"id":146194315,"login":"Rissbiggy","userEmail":"omosmaurice12@gmail.com"},"blob":{"rawLines":["<!DOCOTYPE html>\r","<!---We enter the user name and password-->\r","<html>\r","    <head>\r","        <title>\r","            Login\r","        </title>\r","        <link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">\r","        <style>\r","            body{\r","                background:#91a716;\r","                display:flex;\r","                justify-content:center;\r","                align-items:center;\r","                height:100vh;\r","                flex-direction:column;\r","                font-family:cursive;\r","                box-sizing:padding-box;\r","            }\r","            form{\r","                width: 1000px;\r","                border:3px solid rgb(177, 142, 142);\r","                padding: 20px;\r","                background-color:rgb(85, 54, 54);\r","                border: radius 20px;\r","\r","            }\r","            h2{\r","                text-align:center;\r","                margin: bottom 40px;\r","\r","            }\r","            input{\r","                display:block;\r","                border:2px solid #ccc;\r","                width 95%;\r","                padding: 10px;\r","                margin:10px auto;\r","                border-radius:5px;\r","\r","            }\r","            label{\r","                color:#888;\r","                font-size:18px;\r","                padding:10px;\r","\r","            }\r","            buuton{\r","                float:right;\r","                background:rgb(35, 174, 202);\r","                padding:10px 15px;\r","                color:#fff;\r","                border-radius:5px;\r","                margin-right:10px;\r","                border:none;\r","            }\r","            button:hover{\r","                opacity:.10;\r","            }\r","            eror{\r","                background:#F2Dede;\r","                color:#0c0101;\r","                padding:10px;\r","                width:95%;\r","                border-radius:5px;\r","                margin:20px auto;\r","\r","            }\r","            h1{\r","                text-align:center;\r","                color:rgb(134, 3,3);\r","\r","            }\r","            a{\r","                float:right;\r","                background:rgb(183, 225,233);\r","                padding:10px 15px;\r","                color:#fff;\r","                margin-right:10px;\r","                border:none;\r","                text-decoration:none;\r","            }\r","            a:hover{\r","                opacity:.7;\r","            }\r","        </style>\r","    </head>\r","    <body>\r","        <form action=\"login.php\" method=\"post\">\r","            <h2>LOGIN FORM</h2>\r","            <label for=\"username\">Username</label>\r","            <input type=\"text\"\r","            name=\"uname\"\r","            placeholder=\"enter your username correctly\"/>\r","            <label>Password:</label>\r","            <input type=\"password\"\r","            name=\"pwd\" \r","            placeholder=\"password\"/><br>\r","            <button type=\"submit\">LOGIN</button>\r","        </form>\r","    </body>\r","</html>"],"stylingDirectives":[[{"start":2,"end":15,"cssClass":"pl-ii"}],[{"start":0,"end":43,"cssClass":"pl-c"},{"start":0,"end":4,"cssClass":"pl-c"},{"start":40,"end":43,"cssClass":"pl-c"}],[{"start":1,"end":5,"cssClass":"pl-ent"}],[{"start":4,"end":10,"cssClass":"pl-s1"},{"start":5,"end":9,"cssClass":"pl-ent"}],[{"start":0,"end":15,"cssClass":"pl-s1"},{"start":9,"end":14,"cssClass":"pl-ent"}],[{"start":0,"end":17,"cssClass":"pl-s1"}],[{"start":0,"end":16,"cssClass":"pl-s1"},{"start":10,"end":15,"cssClass":"pl-ent"}],[{"start":0,"end":69,"cssClass":"pl-s1"},{"start":9,"end":13,"cssClass":"pl-ent"},{"start":14,"end":17,"cssClass":"pl-e"},{"start":17,"end":18,"cssClass":"pl-k"},{"start":18,"end":30,"cssClass":"pl-s"},{"start":18,"end":19,"cssClass":"pl-pds"},{"start":29,"end":30,"cssClass":"pl-pds"},{"start":31,"end":35,"cssClass":"pl-e"},{"start":35,"end":36,"cssClass":"pl-k"},{"start":36,"end":46,"cssClass":"pl-s"},{"start":36,"end":37,"cssClass":"pl-pds"},{"start":45,"end":46,"cssClass":"pl-pds"},{"start":47,"end":51,"cssClass":"pl-e"},{"start":51,"end":52,"cssClass":"pl-k"},{"start":52,"end":68,"cssClass":"pl-s"},{"start":52,"end":53,"cssClass":"pl-pds"},{"start":67,"end":68,"cssClass":"pl-pds"}],[{"start":0,"end":15,"cssClass":"pl-s1"},{"start":9,"end":14,"cssClass":"pl-ent"}],[{"start":0,"end":17,"cssClass":"pl-s1"},{"start":16,"end":17,"cssClass":"pl-pse"},{"start":17,"end":17,"cssClass":"pl-s1"}],[{"start":0,"end":35,"cssClass":"pl-s1"},{"start":0,"end":35,"cssClass":"pl-s1"},{"start":16,"end":26,"cssClass":"pl-c1"},{"start":30,"end":34,"cssClass":"pl-c1"}],[{"start":0,"end":29,"cssClass":"pl-s1"},{"start":0,"end":29,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":24,"end":28,"cssClass":"pl-c1"}],[{"start":0,"end":39,"cssClass":"pl-s1"},{"start":0,"end":39,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":23,"end":24,"cssClass":"pl-k"},{"start":24,"end":31,"cssClass":"pl-c1"},{"start":32,"end":38,"cssClass":"pl-c1"}],[{"start":0,"end":35,"cssClass":"pl-s1"},{"start":0,"end":35,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":21,"end":22,"cssClass":"pl-k"},{"start":22,"end":27,"cssClass":"pl-c1"},{"start":28,"end":34,"cssClass":"pl-c1"}],[{"start":0,"end":29,"cssClass":"pl-s1"},{"start":0,"end":29,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":26,"end":28,"cssClass":"pl-c1"}],[{"start":0,"end":38,"cssClass":"pl-s1"},{"start":0,"end":38,"cssClass":"pl-s1"},{"start":16,"end":20,"cssClass":"pl-c1"},{"start":20,"end":21,"cssClass":"pl-k"},{"start":21,"end":30,"cssClass":"pl-c1"},{"start":31,"end":37,"cssClass":"pl-c1"}],[{"start":0,"end":36,"cssClass":"pl-s1"},{"start":0,"end":36,"cssClass":"pl-s1"},{"start":16,"end":20,"cssClass":"pl-c1"},{"start":20,"end":21,"cssClass":"pl-k"},{"start":21,"end":27,"cssClass":"pl-c1"},{"start":28,"end":35,"cssClass":"pl-c1"}],[{"start":0,"end":39,"cssClass":"pl-s1"},{"start":0,"end":39,"cssClass":"pl-s1"},{"start":16,"end":19,"cssClass":"pl-c1"},{"start":19,"end":20,"cssClass":"pl-k"},{"start":20,"end":26,"cssClass":"pl-c1"},{"start":27,"end":34,"cssClass":"pl-c1"},{"start":34,"end":35,"cssClass":"pl-k"},{"start":35,"end":38,"cssClass":"pl-c1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":17,"cssClass":"pl-s1"},{"start":16,"end":17,"cssClass":"pl-pse"},{"start":17,"end":17,"cssClass":"pl-s1"}],[{"start":0,"end":30,"cssClass":"pl-s1"},{"start":0,"end":30,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":27,"end":29,"cssClass":"pl-c1"}],[{"start":0,"end":52,"cssClass":"pl-s1"},{"start":0,"end":52,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":24,"end":26,"cssClass":"pl-c1"},{"start":27,"end":32,"cssClass":"pl-c1"},{"start":33,"end":36,"cssClass":"pl-en"},{"start":37,"end":40,"cssClass":"pl-c1"},{"start":42,"end":45,"cssClass":"pl-c1"},{"start":47,"end":50,"cssClass":"pl-c1"}],[{"start":0,"end":30,"cssClass":"pl-s1"},{"start":0,"end":30,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":27,"end":29,"cssClass":"pl-c1"}],[{"start":0,"end":49,"cssClass":"pl-s1"},{"start":0,"end":49,"cssClass":"pl-s1"},{"start":16,"end":26,"cssClass":"pl-c1"},{"start":26,"end":27,"cssClass":"pl-k"},{"start":27,"end":32,"cssClass":"pl-c1"},{"start":33,"end":36,"cssClass":"pl-en"},{"start":37,"end":39,"cssClass":"pl-c1"},{"start":41,"end":43,"cssClass":"pl-c1"},{"start":45,"end":47,"cssClass":"pl-c1"}],[{"start":0,"end":36,"cssClass":"pl-s1"},{"start":0,"end":36,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":24,"end":30,"cssClass":"pl-c1"},{"start":33,"end":35,"cssClass":"pl-c1"}],[{"start":0,"end":0,"cssClass":"pl-s1"},{"start":0,"end":0,"cssClass":"pl-s1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":15,"cssClass":"pl-s1"},{"start":14,"end":15,"cssClass":"pl-pse"},{"start":15,"end":15,"cssClass":"pl-s1"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":0,"end":34,"cssClass":"pl-s1"},{"start":16,"end":20,"cssClass":"pl-c1"},{"start":20,"end":21,"cssClass":"pl-k"},{"start":21,"end":26,"cssClass":"pl-c1"},{"start":27,"end":33,"cssClass":"pl-c1"}],[{"start":0,"end":36,"cssClass":"pl-s1"},{"start":0,"end":36,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":24,"end":30,"cssClass":"pl-c1"},{"start":33,"end":35,"cssClass":"pl-c1"}],[{"start":0,"end":0,"cssClass":"pl-s1"},{"start":0,"end":0,"cssClass":"pl-s1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":18,"cssClass":"pl-s1"},{"start":17,"end":18,"cssClass":"pl-pse"},{"start":18,"end":18,"cssClass":"pl-s1"}],[{"start":0,"end":30,"cssClass":"pl-s1"},{"start":0,"end":30,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":24,"end":29,"cssClass":"pl-c1"}],[{"start":0,"end":38,"cssClass":"pl-s1"},{"start":0,"end":38,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":24,"end":26,"cssClass":"pl-c1"},{"start":27,"end":32,"cssClass":"pl-c1"},{"start":34,"end":37,"cssClass":"pl-c1"}],[{"start":0,"end":26,"cssClass":"pl-s1"},{"start":0,"end":26,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":22,"end":24,"cssClass":"pl-c1"},{"start":24,"end":25,"cssClass":"pl-k"}],[{"start":0,"end":30,"cssClass":"pl-s1"},{"start":0,"end":30,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":27,"end":29,"cssClass":"pl-c1"}],[{"start":0,"end":33,"cssClass":"pl-s1"},{"start":0,"end":33,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":25,"end":27,"cssClass":"pl-c1"},{"start":28,"end":32,"cssClass":"pl-c1"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":0,"end":34,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":22,"end":23,"cssClass":"pl-k"},{"start":23,"end":29,"cssClass":"pl-c1"},{"start":31,"end":33,"cssClass":"pl-c1"}],[{"start":0,"end":0,"cssClass":"pl-s1"},{"start":0,"end":0,"cssClass":"pl-s1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":18,"cssClass":"pl-s1"},{"start":17,"end":18,"cssClass":"pl-pse"},{"start":18,"end":18,"cssClass":"pl-s1"}],[{"start":0,"end":27,"cssClass":"pl-s1"},{"start":0,"end":27,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":23,"end":26,"cssClass":"pl-c1"}],[{"start":0,"end":31,"cssClass":"pl-s1"},{"start":0,"end":31,"cssClass":"pl-s1"},{"start":16,"end":20,"cssClass":"pl-c1"},{"start":20,"end":21,"cssClass":"pl-k"},{"start":21,"end":25,"cssClass":"pl-c1"},{"start":28,"end":30,"cssClass":"pl-c1"}],[{"start":0,"end":29,"cssClass":"pl-s1"},{"start":0,"end":29,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":26,"end":28,"cssClass":"pl-c1"}],[{"start":0,"end":0,"cssClass":"pl-s1"},{"start":0,"end":0,"cssClass":"pl-s1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":19,"cssClass":"pl-s1"},{"start":18,"end":19,"cssClass":"pl-pse"},{"start":19,"end":19,"cssClass":"pl-s1"}],[{"start":0,"end":28,"cssClass":"pl-s1"},{"start":0,"end":28,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":22,"end":27,"cssClass":"pl-c1"}],[{"start":0,"end":45,"cssClass":"pl-s1"},{"start":0,"end":45,"cssClass":"pl-s1"},{"start":16,"end":26,"cssClass":"pl-c1"},{"start":27,"end":30,"cssClass":"pl-en"},{"start":31,"end":33,"cssClass":"pl-c1"},{"start":35,"end":38,"cssClass":"pl-c1"},{"start":40,"end":43,"cssClass":"pl-c1"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":0,"end":34,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":26,"end":28,"cssClass":"pl-c1"},{"start":31,"end":33,"cssClass":"pl-c1"}],[{"start":0,"end":27,"cssClass":"pl-s1"},{"start":0,"end":27,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":23,"end":26,"cssClass":"pl-c1"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":0,"end":34,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":22,"end":23,"cssClass":"pl-k"},{"start":23,"end":29,"cssClass":"pl-c1"},{"start":31,"end":33,"cssClass":"pl-c1"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":0,"end":34,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":22,"end":23,"cssClass":"pl-k"},{"start":23,"end":28,"cssClass":"pl-c1"},{"start":31,"end":33,"cssClass":"pl-c1"}],[{"start":0,"end":28,"cssClass":"pl-s1"},{"start":0,"end":28,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":23,"end":27,"cssClass":"pl-c1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":25,"cssClass":"pl-s1"},{"start":24,"end":25,"cssClass":"pl-pse"},{"start":25,"end":25,"cssClass":"pl-s1"}],[{"start":0,"end":28,"cssClass":"pl-s1"},{"start":0,"end":28,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":24,"end":25,"cssClass":"pl-k"},{"start":25,"end":27,"cssClass":"pl-c1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":17,"cssClass":"pl-s1"},{"start":16,"end":17,"cssClass":"pl-pse"},{"start":17,"end":17,"cssClass":"pl-s1"}],[{"start":0,"end":35,"cssClass":"pl-s1"},{"start":0,"end":35,"cssClass":"pl-s1"},{"start":16,"end":26,"cssClass":"pl-c1"},{"start":28,"end":34,"cssClass":"pl-c1"}],[{"start":0,"end":30,"cssClass":"pl-s1"},{"start":0,"end":30,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":24,"end":29,"cssClass":"pl-c1"}],[{"start":0,"end":29,"cssClass":"pl-s1"},{"start":0,"end":29,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":26,"end":28,"cssClass":"pl-c1"}],[{"start":0,"end":26,"cssClass":"pl-s1"},{"start":0,"end":26,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":22,"end":24,"cssClass":"pl-c1"},{"start":24,"end":25,"cssClass":"pl-k"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":0,"end":34,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":22,"end":23,"cssClass":"pl-k"},{"start":23,"end":29,"cssClass":"pl-c1"},{"start":31,"end":33,"cssClass":"pl-c1"}],[{"start":0,"end":33,"cssClass":"pl-s1"},{"start":0,"end":33,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":25,"end":27,"cssClass":"pl-c1"},{"start":28,"end":32,"cssClass":"pl-c1"}],[{"start":0,"end":0,"cssClass":"pl-s1"},{"start":0,"end":0,"cssClass":"pl-s1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":15,"cssClass":"pl-s1"},{"start":14,"end":15,"cssClass":"pl-pse"},{"start":15,"end":15,"cssClass":"pl-s1"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":0,"end":34,"cssClass":"pl-s1"},{"start":16,"end":20,"cssClass":"pl-c1"},{"start":20,"end":21,"cssClass":"pl-k"},{"start":21,"end":26,"cssClass":"pl-c1"},{"start":27,"end":33,"cssClass":"pl-c1"}],[{"start":0,"end":36,"cssClass":"pl-s1"},{"start":0,"end":36,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":22,"end":25,"cssClass":"pl-en"},{"start":26,"end":29,"cssClass":"pl-c1"},{"start":31,"end":32,"cssClass":"pl-c1"},{"start":33,"end":34,"cssClass":"pl-c1"}],[{"start":0,"end":0,"cssClass":"pl-s1"},{"start":0,"end":0,"cssClass":"pl-s1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":14,"cssClass":"pl-s1"},{"start":13,"end":14,"cssClass":"pl-pse"},{"start":14,"end":14,"cssClass":"pl-s1"}],[{"start":0,"end":28,"cssClass":"pl-s1"},{"start":0,"end":28,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":22,"end":27,"cssClass":"pl-c1"}],[{"start":0,"end":45,"cssClass":"pl-s1"},{"start":0,"end":45,"cssClass":"pl-s1"},{"start":16,"end":26,"cssClass":"pl-c1"},{"start":27,"end":30,"cssClass":"pl-en"},{"start":31,"end":34,"cssClass":"pl-c1"},{"start":36,"end":39,"cssClass":"pl-c1"},{"start":40,"end":43,"cssClass":"pl-c1"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":0,"end":34,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":26,"end":28,"cssClass":"pl-c1"},{"start":31,"end":33,"cssClass":"pl-c1"}],[{"start":0,"end":27,"cssClass":"pl-s1"},{"start":0,"end":27,"cssClass":"pl-s1"},{"start":16,"end":21,"cssClass":"pl-c1"},{"start":23,"end":26,"cssClass":"pl-c1"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":0,"end":34,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":22,"end":23,"cssClass":"pl-k"},{"start":23,"end":28,"cssClass":"pl-c1"},{"start":31,"end":33,"cssClass":"pl-c1"}],[{"start":0,"end":28,"cssClass":"pl-s1"},{"start":0,"end":28,"cssClass":"pl-s1"},{"start":16,"end":22,"cssClass":"pl-c1"},{"start":23,"end":27,"cssClass":"pl-c1"}],[{"start":0,"end":37,"cssClass":"pl-s1"},{"start":0,"end":37,"cssClass":"pl-s1"},{"start":16,"end":20,"cssClass":"pl-c1"},{"start":20,"end":21,"cssClass":"pl-k"},{"start":21,"end":31,"cssClass":"pl-c1"},{"start":32,"end":36,"cssClass":"pl-c1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":20,"cssClass":"pl-s1"},{"start":19,"end":20,"cssClass":"pl-pse"},{"start":20,"end":20,"cssClass":"pl-s1"}],[{"start":0,"end":27,"cssClass":"pl-s1"},{"start":0,"end":27,"cssClass":"pl-s1"},{"start":16,"end":23,"cssClass":"pl-c1"},{"start":24,"end":25,"cssClass":"pl-k"},{"start":25,"end":26,"cssClass":"pl-c1"}],[{"start":0,"end":13,"cssClass":"pl-s1"},{"start":0,"end":12,"cssClass":"pl-s1"},{"start":12,"end":13,"cssClass":"pl-pse"}],[{"start":0,"end":16,"cssClass":"pl-s1"},{"start":10,"end":15,"cssClass":"pl-ent"}],[{"start":0,"end":11,"cssClass":"pl-s1"},{"start":6,"end":10,"cssClass":"pl-ii"}],[{"start":0,"end":10,"cssClass":"pl-s1"},{"start":5,"end":9,"cssClass":"pl-ent"}],[{"start":0,"end":47,"cssClass":"pl-s1"},{"start":9,"end":13,"cssClass":"pl-ent"},{"start":14,"end":20,"cssClass":"pl-e"},{"start":20,"end":21,"cssClass":"pl-k"},{"start":21,"end":32,"cssClass":"pl-s"},{"start":21,"end":22,"cssClass":"pl-pds"},{"start":31,"end":32,"cssClass":"pl-pds"},{"start":33,"end":39,"cssClass":"pl-e"},{"start":39,"end":40,"cssClass":"pl-k"},{"start":40,"end":46,"cssClass":"pl-s"},{"start":40,"end":41,"cssClass":"pl-pds"},{"start":45,"end":46,"cssClass":"pl-pds"}],[{"start":0,"end":31,"cssClass":"pl-s1"},{"start":13,"end":15,"cssClass":"pl-ent"},{"start":28,"end":30,"cssClass":"pl-ent"}],[{"start":0,"end":50,"cssClass":"pl-s1"},{"start":13,"end":18,"cssClass":"pl-ent"},{"start":19,"end":22,"cssClass":"pl-e"},{"start":22,"end":23,"cssClass":"pl-k"},{"start":23,"end":33,"cssClass":"pl-s"},{"start":23,"end":24,"cssClass":"pl-pds"},{"start":32,"end":33,"cssClass":"pl-pds"},{"start":44,"end":49,"cssClass":"pl-ent"}],[{"start":0,"end":30,"cssClass":"pl-s1"},{"start":13,"end":18,"cssClass":"pl-ent"},{"start":19,"end":23,"cssClass":"pl-e"},{"start":23,"end":24,"cssClass":"pl-k"},{"start":24,"end":30,"cssClass":"pl-s"},{"start":24,"end":25,"cssClass":"pl-pds"},{"start":29,"end":30,"cssClass":"pl-pds"}],[{"start":0,"end":24,"cssClass":"pl-s1"},{"start":12,"end":16,"cssClass":"pl-e"},{"start":16,"end":17,"cssClass":"pl-k"},{"start":17,"end":24,"cssClass":"pl-s"},{"start":17,"end":18,"cssClass":"pl-pds"},{"start":23,"end":24,"cssClass":"pl-pds"}],[{"start":0,"end":57,"cssClass":"pl-s1"},{"start":12,"end":23,"cssClass":"pl-e"},{"start":23,"end":24,"cssClass":"pl-k"},{"start":24,"end":55,"cssClass":"pl-s"},{"start":24,"end":25,"cssClass":"pl-pds"},{"start":54,"end":55,"cssClass":"pl-pds"}],[{"start":0,"end":36,"cssClass":"pl-s1"},{"start":13,"end":18,"cssClass":"pl-ent"},{"start":30,"end":35,"cssClass":"pl-ent"}],[{"start":0,"end":34,"cssClass":"pl-s1"},{"start":13,"end":18,"cssClass":"pl-ent"},{"start":19,"end":23,"cssClass":"pl-e"},{"start":23,"end":24,"cssClass":"pl-k"},{"start":24,"end":34,"cssClass":"pl-s"},{"start":24,"end":25,"cssClass":"pl-pds"},{"start":33,"end":34,"cssClass":"pl-pds"}],[{"start":0,"end":23,"cssClass":"pl-s1"},{"start":12,"end":16,"cssClass":"pl-e"},{"start":16,"end":17,"cssClass":"pl-k"},{"start":17,"end":22,"cssClass":"pl-s"},{"start":17,"end":18,"cssClass":"pl-pds"},{"start":21,"end":22,"cssClass":"pl-pds"}],[{"start":0,"end":40,"cssClass":"pl-s1"},{"start":12,"end":23,"cssClass":"pl-e"},{"start":23,"end":24,"cssClass":"pl-k"},{"start":24,"end":34,"cssClass":"pl-s"},{"start":24,"end":25,"cssClass":"pl-pds"},{"start":33,"end":34,"cssClass":"pl-pds"},{"start":37,"end":39,"cssClass":"pl-ent"}],[{"start":0,"end":48,"cssClass":"pl-s1"},{"start":13,"end":19,"cssClass":"pl-ent"},{"start":20,"end":24,"cssClass":"pl-e"},{"start":24,"end":25,"cssClass":"pl-k"},{"start":25,"end":33,"cssClass":"pl-s"},{"start":25,"end":26,"cssClass":"pl-pds"},{"start":32,"end":33,"cssClass":"pl-pds"},{"start":41,"end":47,"cssClass":"pl-ent"}],[{"start":0,"end":15,"cssClass":"pl-s1"},{"start":10,"end":14,"cssClass":"pl-ii"}],[{"start":0,"end":11,"cssClass":"pl-s1"},{"start":6,"end":10,"cssClass":"pl-ii"}],[{"start":0,"end":7,"cssClass":"pl-s1"},{"start":2,"end":6,"cssClass":"pl-ii"}]],"csv":null,"csvError":null,"dependabotInfo":{"showConfigurationBanner":null,"configFilePath":null,"networkDependabotPath":"/Rissbiggy/web-development/network/updates","dismissConfigurationNoticePath":"/settings/dismiss-notice/dependabot_configuration_notice","configurationNoticeDismissed":false,"repoAlertsPath":"/Rissbiggy/web-development/security/dependabot","repoSecurityAndAnalysisPath":"/Rissbiggy/web-development/settings/security_analysis","repoOwnerIsOrg":false,"currentUserCanAdminRepo":true},"displayName":"index.php","displayUrl":"https://github.com/Rissbiggy/web-development/blob/main/index.php?raw=true","headerInfo":{"blobSize":"2.77 KB","deleteInfo":{"deleteTooltip":"Delete this file"},"editInfo":{"editTooltip":"Edit this file"},"ghDesktopPath":"https://desktop.github.com","gitLfsPath":null,"onBranch":true,"shortPath":"79bceec","siteNavLoginPath":"/login?return_to=https%3A%2F%2Fgithub.com%2FRissbiggy%2Fweb-development%2Fblob%2Fmain%2Findex.php","isCSV":false,"isRichtext":false,"toc":null,"lineInfo":{"truncatedLoc":"102","truncatedSloc":"96"},"mode":"file"},"image":false,"isCodeownersFile":null,"isPlain":false,"isValidLegacyIssueTemplate":false,"issueTemplateHelpUrl":"https://docs.github.com/articles/about-issue-and-pull-request-templates","issueTemplate":null,"discussionTemplate":null,"language":"Hack","languageID":153,"large":false,"loggedIn":true,"newDiscussionPath":"/Rissbiggy/web-development/discussions/new","newIssuePath":"/Rissbiggy/web-development/issues/new","planSupportInfo":{"repoIsFork":null,"repoOwnedByCurrentUser":null,"requestFullPath":"/Rissbiggy/web-development/blob/main/index.php","showFreeOrgGatedFeatureMessage":null,"showPlanSupportBanner":null,"upgradeDataAttributes":null,"upgradePath":null},"publishBannersInfo":{"dismissActionNoticePath":"/settings/dismiss-notice/publish_action_from_dockerfile","dismissStackNoticePath":"/settings/dismiss-notice/publish_stack_from_file","releasePath":"/Rissbiggy/web-development/releases/new?marketplace=true","showPublishActionBanner":false,"showPublishStackBanner":false},"rawBlobUrl":"https://github.com/Rissbiggy/web-development/raw/main/index.php","renderImageOrRaw":false,"richText":null,"renderedFileInfo":null,"shortPath":null,"tabSize":8,"topBannersInfo":{"overridingGlobalFundingFile":false,"globalPreferredFundingPath":null,"repoOwner":"Rissbiggy","repoName":"web-development","showInvalidCitationWarning":false,"citationHelpUrl":"https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/creating-a-repository-on-github/about-citation-files","showDependabotConfigurationBanner":null,"actionsOnboardingTip":null},"truncated":false,"viewable":true,"workflowRedirectUrl":null,"symbols":{"timedOut":false,"notAnalyzed":false,"symbols":[]}},"copilotInfo":{"documentationUrl":"https://docs.github.com/copilot/overview-of-github-copilot/about-github-copilot-for-individuals","notices":{"codeViewPopover":{"dismissed":false,"dismissPath":"/settings/dismiss-notice/code_view_copilot_popover"}},"userAccess":{"accessAllowed":false,"hasSubscriptionEnded":false,"orgHasCFBAccess":false,"userHasCFIAccess":false,"userHasOrgs":false,"userIsOrgAdmin":false,"userIsOrgMember":false,"business":null,"featureRequestInfo":null}},"copilotAccessAllowed":true,"csrf_tokens":{"/Rissbiggy/web-development/branches":{"post":"8yHrYRVTjhTQ6z6EQBqnoXm1-PviwZHdwby29glk9m7a9JSDkItyzXR39rQRguY4Lt3T6xZv1ki6lkHmUMuWnA"},"/repos/preferences":{"post":"76x5eufhF66tFJKhfdCbFGhC11rX8W6Bh1iEd5GNn2DhqObQhzBGah1axn5-AvKZZJkunKqi5QPa1ITFAi3cGg"}}},"title":"web-development/index.php at main · Rissbiggy/web-development"}