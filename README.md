# vps-setup

The goal of `vps-setup` is to first keep the Ansible scripts used to boostrap my personal VPS.
Secondly, this repository also contains the definition of every services running on my VPS.
The service definition consists of a single docker-compose file.

## Prerequisite

The bootstrap script makes some assumptions that need to be fulfilled for a successful run.
Therefore, some manual steps may be needed:

- A user `<x>` with sudo capabilities
- Ssh to remote user `<x>` using public-key instead of password
- User `<x>` is in group `sshusers`

## Boostrap

To run the boostrap script, use:

```sh
ansible-playbook -i hosts bootstrap.yaml --ask-become-pass
```

*Don't forget to update the hosts file if you want use this command*

## Services

My personal VPS is setup to run everything as container using docker and docker-compose.
Currently, those services are configured:

- Nextcloud for file backup

In the `services/` folder, run:

```sh
sudo docker-compose up --build
```

in order to launch everything.