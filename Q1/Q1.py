#Run python3
import json
import code_lookup_dict as q

def lookupCodes(inputs):
	outputs = []
	for i in inputs:
		if i in q.all_codes:
			outputs.append({'code':i ,'description': q.all_codes[i]})
		else:
			outputs.append({'code':i ,'description': 'Not found'})

	return json.dumps({'codes': outputs}, sort_keys=True, indent=4)

#inputs = ['M3', 'R3-2', 'PARKNYS', 'M1-3/R9']
inputs = '''
R7A
R8A
C4-4A
M3-2
R8B
C1-6A
R7B
R8X
C1-7A
PARK
C1-9A
R6
C1-7
C2-6
R10
C4-5
C6-3X
C1-6
C6-2M
C6-4M
M2-4
M1-5/R7X
'''

outputs = lookupCodes(inputs.split())

print('Input:\n\n',inputs.split(),'\n\nOutput:\n\n ',outputs)
