general_residence_districts = '''
R1-1
R1-2
R1-2A
R2
R2A
R2X
R3-1
R3-2
R3A
R3X
R4
R4-1
R4A
R4B
R5
R5A
R5B
R5D
R6
R6A
R6B
R7
R7A
R7B
R7D
R7X
R8
R8A
R8B
R8X
R9
R9A
R9D
R9X
R10
R10A
R10X
'''
gen_res_list = general_residence_districts.split()

commercial_districts = '''
C1-6
C2-6
C1-6A
C2-6A
C1-7
C2-7
C1-7A
C2-7A
C2-7X
C1-8
C2-8
C1-8A
C2-8A
C1-8X
C1-9
C1-9A
C2-1
C2-2
C2-3
C2-4
C2-5
C3
C3A
C4-1
C4-2
C4-3
C4-2A
C4-3A
C4-4
C4-5
C4-4A
C4-4L
C4-5A
C4-4D
C4-5D
C4-5X
C4-6
C4-6A
C4-7
C4-7A
C5-1
C5-1A
C5-2
C5-4
C5-2A
C5-3
C5-5
C6-1
C6-1A
C6-2
C6-2A 
C6-3
C6-3A
C6-3D
C6-3X
C6-4
C6-4A
C6-4X
C6-5
C6-6
C6-7
C6-8
C6-9
C7
C8-1
C8-2
C8-3
C8-4
'''

manufacturing_districts ='''
M1-1
M1-2
M1-3
M1-4
M1-5
M1-6
M2-1
M2-2
M2-3
M2-4
M3-1
M3-2
'''

mix_man_res1 ='''
M1-1
M1-2
M1-3
M1-4
M1-5
M1-6
'''
mix_man_res2 ='''
R5
R5A
R5B
R5D
R6
R6A
R6B
R7
R7A
R7B
R7D
R7X
R8
R8A
R8B
R8X
R9
R9A
R9D
R9X
R10
R10A
R10X
'''
mix_man_res_combos = ['/'.join((x,y)) for x in mix_man_res1.split() 
									for y in mix_man_res2.split()]

battery_park_city = 'BPC'					

new_york_city_parks = 'PARK'				

new_york_state_parks = 'PARKNYS'				

united_states_parks = 'PARKUS'				

zoning_not_applicable = 'ZNA'					

special_zoning_district = 'ZR 11-151'			