import csv

csvFile = 'Coba2.csv'
xmlFile = 'Coba2.xml'

csvData = csv.reader(open(csvFile))
xmlData = open(xmlFile, 'w')
xmlData.write('<?xml version="1.0"?>' + "\n")
xmlData.write('<csv_data>' + "\n")

rowNum = 0
for row in csvData:
    if rowNum == 0:
        tags = row
        
        for i in range(len(tags)):
            tags[i] = tags[i].replace(' ', '_')
    else: 
        xmlData.write('<row>' + "\n")
        for i in range(len(tags)):
        xmlData.write('    ' + '<' + tags[i] + '>' \ + row[i] + '</' + tags[i] + '>' + "\n")
        xmlData.write('</row>' + "\n")
            
    rowNum +=1

xmlData.write('</csv_data>' + "\n")
xmlData.close()
