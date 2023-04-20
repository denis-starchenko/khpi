FROM ubuntu:latest

RUN apt-get update && apt-get install -y cron
RUN apt-get install -y mailutils
RUN apt-get install -y curl
RUN apt-get install -y rsyslog
RUN mkdir -p /app/log

COPY check-response.sh /app/check-response.sh
RUN chmod 0644 /app/check-response.sh

RUN echo "*/1 * * * * bash /app/check-response.sh" | crontab -

CMD ["cron", "-f"]

















