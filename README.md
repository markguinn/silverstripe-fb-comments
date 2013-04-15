Simple Facebook Comments Module
===============================

A really simple module for adding Facebook comments to a silverstripe site. There
are probably better ones out there, but this is meant to get you up and running
in 5 minutes or so.

INSTALLATION:
-------------
0. Create an app in the fb developers area.
1. Either 'composer require markguinn/silverstripe-fb-comments' or download from github into
   an 'fb-comments' folder in your site root.
2. Either install 'tractorcow/silverstripe-opengraph' module (recommended) or add an 'OGApplicationID'
   method to SiteConfig with your fb application ID. If you do the former, you'll need/want to add $OGNS
   to your html tag and probably add a getOGImage method to Page.
3. Add 'FBCommentsExtension' to BlogEntry or Page (or whichever classes you want comments available).
   Probably something like:
```php
BlogEntry::add_extension('FBComments');
```
4. Add the following just after the opening body tag IF you're not already including the FB API for
   something else (like buttons, etc):
```html
<% include OptionalFBAPI %>
```
5. Add the following where you want comments to show up:
```html
<% include FBComments %>
```

CONFIG OPTIONS:
---------------
The following configuration options are available on FBComments:
* num_posts - The number of comments to show initially. Default is 3.
* comment_width - The width of the comment area. Default is 600
* color_scheme - See FB documentation for details. Default is light.

DEVELOPERS:
-----------
* Mark Guinn - mark@adaircreative.com

LICENSE (MIT):
--------------
Copyright (c) 2013 Mark Guinn

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the
Software, and to permit persons to whom the Software is furnished to do so, subject
to the following conditions:

The above copyright notice and this permission notice shall be included in all copies
or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.