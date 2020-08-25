//セキュリティグループ
resource "aws_security_group" "web_sg" {
    name   = "web-sg"
    vpc_id = aws_vpc.main.id
    tags = {
        Name = "tf_web"
    }
}

resource "aws_security_group_rule" "ssh" {
    type              = "ingress"
    from_port         = 22
    to_port           = 22
    protocol          = "tcp"
    cidr_blocks       = ["0.0.0.0/0"]
    security_group_id = aws_security_group.web_sg.id
}

resource "aws_security_group_rule" "http" {
    type              = "ingress"
    from_port         = 80
    to_port           = 80
    protocol          = "tcp"
    cidr_blocks       = ["0.0.0.0/0"]
    security_group_id = aws_security_group.web_sg.id
}

resource "aws_security_group_rule" "all" {
    type              = "egress"
    from_port         = 0
    to_port           = 0
    protocol          = "-1"
    cidr_blocks       = ["0.0.0.0/0"]
    security_group_id = aws_security_group.web_sg.id
}

resource "aws_instance" "web" {
    ami                         = data.aws_ssm_parameter.amzn2_ami.value
    instance_type               = "t2.micro"
    subnet_id                   = aws_subnet.public-1a.id
    associate_public_ip_address = true
//    key_name                    = aws_key_pair.auth.id
    vpc_security_group_ids      = [aws_security_group.web_sg.id]
    user_data                   = file("./user_data.sh")

}

//resource "aws_key_pair" "auth" {
//    key_name   = var.key_name
//    public_key = file(var.public_key_path)
//
//}



//最新Amazon Linux 2 の取得
data "aws_ssm_parameter" "amzn2_ami" {
    name = "/aws/service/ami-amazon-linux-latest/amzn2-ami-hvm-x86_64-gp2"
}

output "eip_address" {
    value = aws_eip.eip.public_ip
}
