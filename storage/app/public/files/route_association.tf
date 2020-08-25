//パブリックサブネットとルートテーブルの関連付け
resource "aws_route_table_association" "public" {
  route_table_id = aws_route_table.public.id
  subnet_id      = aws_subnet.public-1a.id
}

