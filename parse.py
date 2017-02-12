
import json

'''
Takes in a NRC text file and parse it into a dictionary mapping each word to a list of ints, 
indicating the score for each sentiment. The field of the list is as below
0       1             2       3      4    5         6         7        8         9
[anger, anticipation, disgust, fear, joy, negative, positive, sadness, surprise, trust]

'''
nrcp = './NRC-v0.92.txt'

nrc = open(nrcp, 'r')
wordToEmotions = {}
for line in nrc:
    entry = line.split("\t")
    if len(entry) != 3:
        continue
    else:
        try:
            wordToEmotions[entry[0]].append(int(entry[2]))
        except KeyError:
            wordToEmotions[entry[0]] = [int(entry[2])]
nrc.close()
json.dump(wordToEmotions, open("lexicon.json", "w"))