#!/usr/bin/env python
# coding: utf-8
# bubble sort python

def bubble_sort():
	#input_data = [7,5,9,3,6,2,11,8]
	input_data = [3,2,1]
	t = 0
	
	for index,item in enumerate(input_data,start=0):
		for i in xrange(len(input_data)-index-1):
			if(input_data[i] > input_data[i+1]):
				print index,i
				t = input_data[i]
				input_data[i] = input_data[i+1]
				input_data[i+1] = t

				print input_data	




bubble_sort()
