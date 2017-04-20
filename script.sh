#!/bin/bash
echo "Hey $USER, Type your name here: "
read name
echo "Hello $name."
echo "What is your gender? "
read gender
if [ $gender == "m" ]; then 
echo "So Dude, What is your favorite ride? "
read car

else
echo "Ahaa, what is that you can not wait to eat?"
read food

fi
