FROM ubuntu:latest
MAINTAINER Denys

ADD check-response.sh /root/check-response.sh
RUN chmod 0644 /root/check-response.sh

RUN apt-get update
RUN apt-get -y install cron

RUN crontab -l | { cat; echo "*/1 * * * * bash /root/check-response.sh"; } | crontab -
CMD cron



