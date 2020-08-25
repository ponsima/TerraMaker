//パブリックサブネット定義
resource "aws_subnet" "public-1a" {
  cidr_block              = "10.0.0.0/24"
  vpc_id                  = aws_vpc.main.id
  map_public_ip_on_launch = true
  availability_zone       = "ap-northeast-1a"

  tags = {
    Name = "パブリックサブネット-1a"
  }
}



//プライベートサブネット作成
//resource "aws_subnet" "private_1a" {
//  cidr_block              = "10.0.1.0/24"
//  vpc_id                  = aws_vpc.main.id
//  map_public_ip_on_launch = false
//  availability_zone       = "ap-northeast-1a"
//
//  tags = {
//    Name = "プライベートサブネット-1a"
//  }
//}


//resource "aws_subnet" "private_1c" {
//  cidr_block              = "10.0.2.0/24"
//  vpc_id                  = aws_vpc.main.id
//  map_public_ip_on_launch = false
//  availability_zone       = "ap-northeast-1c"
//
//  tags = {
//    Name = "プライベートサブネット-1c"
//  }
//}
