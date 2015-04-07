The RESTful API supports following entities:
  1. posts
  2. taxonomies
  3. shares
  4. clicks
  5. views

API protected with basic authentication. Login:password is api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++POSTS++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/posts
Host: apiblog.adjump.com
Reading:
-----------

GET /posts?project_id=1&limit=10&offset=0: list all posts;
    - api_key - required param. Just required
    - project_id - required param. Internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    - limit - not required param. Maximum number of rows to return. Default value is 10
    - offset - not required param. Offset of the first row to return. Default value is 0
Response:
[
  {
    "ID": {post_id},
    ... //post data
  },
  {
    "ID": {post_id},
    ... //post data
  }
]
GET /posts/{post_id}: return the details of the post {post_id};
Response:
{
    "ID": {post_id},
    ... //post data
}

Publishing:
-----------

You can publish post by using the following endpoint:
POST /posts
PHP example:
==============================================================
$ch = curl_init('http://{host}/posts');
curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
curl_exec($ch);
curl_close($ch);
==============================================================
Response:
{
    "ID": {post_id},
    ... //post data
}

Updating
-----------

You can edit a post by using the following endpoint:
PUT /posts/{post_id}: update the post {post_id};
PHP example:
==============================================================
$ch = curl_init('http://{host}/posts/{post_id}');
curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
curl_exec($ch);
curl_close($ch);
==============================================================
Response:
{
    "ID": {post_id},
    ... //post data
}

Deleting:
-----------

You can delete a post by using the following endpoint:
DELETE /posts/{post_id};
PHP example:
==============================================================
$ch = curl_init('http://{host}/posts/{post_id}');
curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_exec($ch);
curl_close($ch);
==============================================================

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++TAXONOMIES+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/taxonomies
Host: apiblog.adjump.com
Reading:
-----------

GET /taxonomies?project_id=1&limit=10&offset=0: list all taxonomies;
    - api_key - required param. Just required
    - project_id - required param. Internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    - limit - not required param. Maximum number of rows to return. Default value is 10
    - offset - not required param. Offset of the first row to return. Default value is 0
Response:
[
  {
    "ID": {taxonomy_id},
    ... //taxonomy data
  },
  {
    "ID": {taxonomy_id},
    ... //taxonomy data
  }
]
GET /taxonomies/{taxonomy_id}: return the details of the taxonomy {taxonomy_id};
Response:
{
    "ID": {taxonomy_id},
    ... //taxonomy data
}

Publishing:
-----------

You can publish taxonomy by using the following endpoint:
POST /taxonomies
PHP example:
==============================================================
$ch = curl_init('http://{host}/taxonomies');
curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($taxonomy));
curl_exec($ch);
curl_close($ch);
==============================================================
Response:
{
    "ID": {taxonomy_id},
    ... //taxonomy data
}

Updating
-----------

You can edit a taxonomy by using the following endpoint:
PUT /taxonomies/{taxonomy_id}: update the taxonomy {taxonomy_id};
PHP example:
==============================================================
$ch = curl_init('http://{host}/taxonomies/{taxonomy_id}');
curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($taxonomy));
curl_exec($ch);
curl_close($ch);
==============================================================
Response:
{
    "ID": {taxonomy_id},
    ... //taxonomy data
}

Deleting:
-----------

You can delete a taxonomy by using the following endpoint:
DELETE /taxonomies/{taxonomy_id};
PHP example:
==============================================================
$ch = curl_init('http://{host}/taxonomies/{taxonomy_id}');
curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_exec($ch);
curl_close($ch);
==============================================================

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++SHARES+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

GET /shares?api_key=1qA34-801&project_id=1&post_id=158930 : list all shares;
    - api_key - required param. Just required
    - project_id - required param. Internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    - post_id - required param.
Response:
{
    "shares": {
        "facebook": 1151,
        "twitter": 0,
        "pinterest": 0,
        "googleplus": 0
    }
}

Publishing:
-----------

You can add share by using the following endpoint:
POST /shares

Request:

{
    "post_id" : "17",
    "project_id" : 1,
    "shares" : 1149,
    "social_network" : "facebook"
}

==============================================================
Response:
{
    "post_id": "17",
    "project_id": 1,
    "shares": 1149,
    "social_network": "facebook",
    "timestamp": 1427570217,
    "_id": {
        "$id": "5516fe2928f370f80b000049"
    }
}

==============================================================

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++CLICKS+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
GET /clicks?api_key=1qA34-801&project_id=1&post_id=158930 : list all clicks;
    - api_key - required param. Just required
    - project_id - required param. Internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    - post_id - required param.
Response:
{
    "total": 3,
    "unique": 2
}

Publishing:
-----------

You can add click by using the following endpoint:
POST /clicks

Request:

{
  "post_id": "17",
  "post_url": "_facebook_pet-freebies/golden-retriever/",
  "project_id": 1,
  "platform": "mobile",
  "type": "header"
}

==============================================================
Response:
{
    "post_id": "17",
    "post_url": "_facebook_pet-freebies/golden-retriever/",
    "project_id": 1,
    "platform": "mobile",
    "type": "header",
    "timestamp": 1427570342,
    "_id": {
        "$id": "5516fea628f370f80b00004a"
    }
}

==============================================================

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++VIEWS++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
GET /views?api_key=1qA34-801&project_id=1&post_id=158930 : list all page views;
    - api_key - required param. Just required
    - project_id - required param. Internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    - post_id - required param.
Response:
{
    "total": 3,
    "unique": 2
}

Publishing:
-----------

You can add page view by using the following endpoint:
POST /views

Request:

{
  "post_id": 17,
  "post_url": "/coupons/glad-food-protection-products/",
  "project_id": 1,
  "platform": "mobile"
}

==============================================================
Response:
{
    "post_id": 17,
    "post_url": "/coupons/glad-food-protection-products/",
    "project_id": 1,
    "platform": "mobile",
    "timestamp": 1427570525,
    "_id": {
        "$id": "5516ff5d28f370f80b00004c"
    }
}

==============================================================

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++STATS++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
GET /stats?api_key=1qA34-801&project_id=1&post_id=158930 : list full stats;
    - api_key - required param. Just required
    - project_id - required param. Internal ID for wordpress blog. For example 1 is http://womanfreebies.com/, 2 is http://womenfreebies.ca/ etc
    - post_id - required param.
Response:
{
    "shares": {
        "facebook": 0,
        "twitter": 0,
        "pinterest": 0,
        "googleplus": 0
    },
    "clicks": {
        "total": 3,
        "unique": 2
    },
    "views": {
        "total": 3,
        "unique": 2
    }
}