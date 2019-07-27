import json
class SetEncoder(json.JSONEncoder):
    def default(self, obj):
        if isinstance(obj, set):
            return list(obj)
        return json.JSONEncoder.default(self, obj)

identity = {"name":'Rievanda Putri',
                'age': 22,
                'address': 'Jalan Pedati Timur Dalam',
                'hobbies': 'Menonton film',
                'is_married': False,
                'list_school': [{'name : SDN CC 04 Pagi, year_in : 2003, year_out : 2009, major : null'},
                                {'name : SMPN 216 Jakarta, year_in : 2009, year_out : 2012, major : null'},
                                {'name : SMAN 26 Jakarta, year_in : 2012, year_out : 2015, major : IPA'},
                                {'name : Universitas Indonesia, year_in : 2015, year_out : 2019, major : Fisika'}],
                 
                 'skills' : [{'skill name : MATLAB, level : beginner'},
                             {'skill name : Machine learning, level : beginner'}],
                 'interest_in_coding': True
                }
print(json.dumps(identity, cls=SetEncoder))