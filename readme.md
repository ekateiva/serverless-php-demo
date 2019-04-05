# Serverless PHP

This is an example, how you can use PHP functions or console commands on AWS Lambda.

## PHP Functions

Invoke AWS Lambda function:
```
$ vendor/bin/bref invoke hello-name-function --region=eu-west-1 --event='{"name": "John Doe" }'
```

Locally:
```
$ sam local invoke HelloNameFunction --no-event
```

## Console

Invoke AWS Lambda function:
```
$ vendor/bin/bref --region=eu-west-1 cli shopify-products-console -- update-product-title 871 \'Test product\'
```
