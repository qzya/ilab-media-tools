<?php
// Copyright (c) 2016 Interfacelab LLC. All rights reserved.
//
// Released under the GPLv3 license
// http://www.gnu.org/licenses/gpl-3.0.html
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

if (!defined('ABSPATH')) { header('Location: /'); die; }

return [
	"title" => "S3",
	"description" => "Automatically uploads media to Amazon S3.",
	"source" => "ilab-media-s3-tool.php",
	"class" => "ILabMediaS3Tool",
	"env" => "ILAB_MEDIA_S3_ENABLED",
	"dependencies" => [],
	"settings" => [
		"title" => "S3 Settings",
		"menu" => "S3 Settings",
		"options-page" => "media-tools-s3",
		"options-group" => "ilab-media-s3",
		"groups" => [
			"ilab-media-s3-aws-settings" => [
				"title" => "AWS Settings",
				"description" => "To get S3 working, you'll have to supply your AWS credentials.  However, the better way of doing it would be to place that information in a .env file, instead of storing it in the database.",
				"options" => [
					"ilab-media-s3-access-key" => [
						"title" => "AWS Access Key",
						"description" => "If you are supplying this value through a .env file, or environment variables, the key is: <strong>ILAB_AWS_S3_ACCESS_KEY</strong>",
						"type" => "text-field",
						"watch" => true
					],
					"ilab-media-s3-secret" => [
						"title" => "AWS Secret",
						"description" => "If you are supplying this value through a .env file, or environment variables, the key is: <strong>ILAB_AWS_S3_ACCESS_SECRET</strong>",
						"type" => "password",
						"watch" => true
					],
					"ilab-media-s3-bucket" => [
						"title" => "AWS Bucket",
						"description" => "If you are supplying this value through a .env file, or environment variables, the key is: <strong>ILAB_AWS_S3_BUCKET</strong>",
						"type" => "text-field",
						"watch" => true
					],
					"ilab-media-s3-region" => [
						"title" => "AWS Region",
						"description" => "The region that your bucket is in.  Setting this is only really useful if you are using compatible S3 services, and not if you are using Amazon S3 itself.  If you are supplying this value through a .env file, or environment variables, the key is: <strong>ILAB_AWS_S3_REGION</strong>",
						"type" => "select",
						"options" => [
							"auto" => "Automatic",
							'us-east-2' => 'US East (Ohio)',
							'us-east-1' => 'US East (N. Virginia)',
							'us-west-1' => 'US West (N. California)',
							'us-west-2' => 'US West (Oregon)',
							'ca-central-1' => 'Canada (Central)',
							'ap-south-1' => 'Asia Pacific (Mumbai)',
							'ap-northeast-2' => 'Asia Pacific (Seoul)',
							'ap-southeast-1' => 'Asia Pacific (Singapore)',
							'ap-southeast-2' => 'Asia Pacific (Sydney)',
							'ap-northeast-1' => 'Asia Pacific (Tokyo)',
							'eu-central-1' => 'EU (Frankfurt)',
							'eu-west-1' => 'EU (Ireland)',
							'eu-west-2' => 'EU (London)',
							'sa-east-1' => 'South America (São Paulo)',
						],
						"watch" => true
					],
					"ilab-media-s3-use-transfer-acceleration" => [
						"title" => "Use Transfer Acceleration",
						"description" => "Amazon S3 Transfer Acceleration enables fast, easy, and secure transfers of files over long distances between your client and an S3 bucket. Transfer Acceleration takes advantage of Amazon CloudFront’s globally distributed edge locations.  <strong>You must have it enabled on your bucket in the S3 console.</strong>",
						"type" => "checkbox",
						"default" => false
					]
				]
			],
			"ilab-media-s3-aws-custom-endpoint-settings" => [
				"title" => "Custom End Point (Advanced)",
				"description" => [
					"ILAB Media Cloud is compatible with any S3 compatible cloud storage server like Minio, Ceph RGW, Google Cloud Storage (when in <a href='https://cloud.google.com/storage/docs/migrating#migration-simple' target=_blank>interoperability mode</a>) or Digital Ocean Spaces.  If you are using one of these services, specify the endpoint for the service's api here.",
					"If you are using Minio, it's important that you specify the region (for example <code>us-east-1</code>) in your <code>/etc/minio/config.json</code> file on your Minio server. <strong>IMPORTANT:</strong> If you are using Minio, your bucket must have a public read policy set for the entire bucket.  See <a href='https://github.com/minio/minio/issues/3774' target=_blank>here</a> for more details."
				],
				"options" => [
					"ilab-media-s3-endpoint" => [
						"title" => "Custom Endpoint URL",
						"description" => "If you are supplying this value through a .env file, or environment variables, the key is: <strong>ILAB_AWS_S3_ENDPOINT</strong>",
						"type" => "text-field",
						"watch" => true
					],
					"ilab-media-s3-use-path-style-endpoint" => [
						"title" => "Path Style Endpoint",
						"description" => "Set to true to send requests to an S3 path style endpoint by default.  If this is unchecked, requests will be sent to something like <code>https://your-bucket-name.your-s3-server.com/</code>, which is likely not to work.",
						"type" => "checkbox",
						"default" => true,
						"watch" => true
					]
				]
			],
			"ilab-media-s3-upload-handling-settings" => [
				"title" => "Upload Handling",
				"description" => "The following options control how the S3 tool handles uploads.",
				"options" => [
					"ilab-media-s3-prefix" => [
						"title" => "Upload File Prefix",
						"description" => "This will prepend a prefix to any file uploaded to S3.  For dynamically created prefixes, you can use the following variables: <code>@[date:format]</code>, <code>@[site-name]</code>, <code>@[site-host]</code>, <code>@[site-id]</code>, <code>@[versioning]</code>, <code>@[user-name]</code>, <code>@[unique-id]</code>, <code>@[unique-path]</code>.  For the date token, format is any format string that you can use with php's date() function.  Note that specifying a prefix here will remove WordPress's default date prefix.  WordPress's default prefix would look like: <code>@[date:Y\/m]</code>. If you are supplying this value through a .env file, or environment variables, the key is: <strong>ILAB_AWS_S3_BUCKET_PREFIX</strong>.",
						"type" => "text-field"
					],
					"ilab-media-s3-privacy" => [
						"title" => "Upload Privacy ACL",
						"description" => "This will set the privacy for each upload.  You should leave it as <code>public-read</code> unless you are using Imgix.",
						"type" => "select",
						"options" => [
							"public-read" => "public-read",
							"authenticated-read" => "authenticated-read"
						]
					],
					"ilab-media-s3-cache-control" => [
						"title" => "Cache Control",
						"description" => "Sets the Cache-Control metadata for an object in S3, e.g. <code>public,max-age=2592000</code> - If you are supplying this value through a .env file, or environment variables, the key is: <strong>ILAB_AWS_S3_CACHE_CONTROL</strong>.",
						"type" => "text-field"
					],
					"ilab-media-s3-expires" => [
						"title" => "Content Expiration",
						"description" => "Sets the Expire metadata for an object in S3.  This is the number of minutes from the date of upload. If you are supplying this value through a .env file, or environment variables, the key is: <strong>ILAB_AWS_S3_EXPIRES</strong>.",
						"type" => "text-field"
					],
					"ilab-media-s3-upload-documents" => [
						"title" => "Upload Non-image Files",
						"description" => "Upload non-image files such as Word documents, PDF files, zip files, etc.",
						"type" => "checkbox",
						"default" => true
					],
					"ilab-media-s3-ignored-mime-types" => [
						"title" => "Ignored MIME Types",
						"description" => "List of MIME types to ignore.  Any files with matching MIME types will not be uploaded to S3.",
						"type" => "text-area"
					],
					"ilab-media-s3-delete-uploads" => [
						"title" => "Delete Uploaded Files",
						"description" => "Deletes uploaded files from the WordPress server after they've been uploaded to S3.",
						"type" => "checkbox"
					],
					"ilab-media-s3-delete-from-s3" => [
						"title" => "Delete From S3",
						"description" => "When you delete from the media library, turning this on will also delete the file from S3.",
						"type" => "checkbox"
					],
					"ilab-media-s3-skip-bucket-check" => [
						"title" => "Skip Bucket Check",
						"description" => "Skip testing if the bucket exists on S3 or not.  If you are doing a lot of media uploads, you will want to make sure this is checked or you could end up being rate limited by Amazon which will cause errors and other mayhem.  Generally speaking, you can leave it unchecked though. If you are supplying this value through a .env file, or environment variables, the key is: <strong>ILAB_AWS_S3_SKIP_BUCKET_CHECK</strong>.",
						"type" => "checkbox",
						"default" => false
					]
				]
			],
			"ilab-media-s3-cdn-settings" => [
				"title" => "CDN Settings",
				"description" => "If you are using CloudFront, Fastly or another CDN, enter the CDN domain here.  If you are using Imgix, the <b>CDN Base URL</b> setting is ignored, but the <b>Document CDN Base URL</b> is not.  If both are left blank, Media Tools will use the S3 URL's.",
				"options" => [
					"ilab-media-s3-cdn-base" => [
						"title" => "CDN Base URL",
						"description" => "This is the base URL for your CDN for serving images, including the scheme (meaning the http/https part).  If you don't have a CDN, you can simply use the AWS S3 URL, eg <strong>https://s3-ap-southeast-1.amazonaws.com/your-bucket-name/</strong>.",
						"type" => "text-field"
					],
					"ilab-doc-s3-cdn-base" => [
						"title" => "Document CDN Base URL",
						"description" => "This is the base URL for your CDN for serving non-image files, including the scheme (meaning the http/https part).  This is separated for your convenience.  If you don't specify a document CDN, it'll use the media/image CDN.",
						"type" => "text-field"
					]
				]
			],
			"ilab-media-s3-display-settings" => [
				"title" => "Display Settings",
				"description" => "",
				"options" => [
					"ilab-media-s3-display-s3-badge" => [
						"title" => "Display S3 Icon",
						"description" => "When this is selected, an S3 icon will be overlayed on items in the media library grid that are being served from S3.",
						"type" => "checkbox",
						"default" => true
					]
				]
			]
		]
	]
];