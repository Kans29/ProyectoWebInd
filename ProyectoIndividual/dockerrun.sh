#!/bin/bash
sudo docker build -t pagweb $(pwd)
sudo docker run -d -p 1000:80 pagweb