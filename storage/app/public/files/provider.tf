provider "aws" {
  version    = "=2.35.0"
  region     = "ap-northeast-1"
  access_key = var.aws_access_key
  secret_key = var.aws_secret_key
}