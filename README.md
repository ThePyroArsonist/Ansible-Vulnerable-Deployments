# Ansible-Vulnerable-Deployments

# Services
- vsftpd (insecure configuration)

# Vulnerabilities
- Anonymous FTP enabled
- Writable directories
- Weak credentials
- No chroot enforcement
- Clear-text authentication
- PHP execution
- Priviledge pivoting 

# Usage
- sudo apt update
- sudo apt install -y sshpass ansible-core
- ./setup-ssh.sh
- ansible-playbook -i inventory.ini playbook.yml
- ansible-playbook -i inventory.ini validate.yml
