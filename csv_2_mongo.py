import csv
import json
import pandas as pd
import sys, getopt, pprint
from pymongo import MongoClient

#CSV to JSON Conversion
csvfile = open(r'/home/shivam/Study/project/chicago-current-employee-information/current-employee-names-salaries-and-position-titles.csv', 'r')
reader = csv.DictReader( csvfile )
mongo_client=MongoClient() 
db=mongo_client.Freelancers
db.Per_info.drop()
header= ["Name", "Job Titles", "Department","Full or Part-Time", "Salary or Hourly", "Typical Hours", "Annual Salary",
          "Hourly Rate"]

pp = pprint.PrettyPrinter(indent=4)

for each in reader:
    row={}
    for field in header:
        if field in ["Job Titles", "Department"]:
            row[field] = each[field].split(",")
        elif each[field] != '' and field == "Annual Salary":
            row["Annual Salary"] = float(each[field])
        elif each[field] != '' and field == "Hourly Rate":
            row["Hourly Rate"] = float(each[field])
        elif each[field] != '' and field == "Typical Hours":
            row["Typical Hours"] = float(each[field])
        elif each[field] != '' and field in ["Name", "Job Titles", "Department", "Salary or Hourly", "Full or Part-Time", "Annual Salary"]:
            row[field] = float(each[field])
        else:
            row[field]=each[field]
    db.movies.insert(row)
    #pp.pprint(row)
    
