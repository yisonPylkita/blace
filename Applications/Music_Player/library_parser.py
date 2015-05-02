#!/usr/bin/python
# -*- coding: utf-8 -*-

lib_file = open('/srv/http/.config/cmus/lib.pl', encoding='UTF-8') # errors can occurs if there is no encoding parameter
tracks = lib_file.readlines()

library = []

for x in tracks:
    library.append(x)

for x in library:   # DEBUG MODE
    print('<li>' + x.split('/home/arlen/Music/Rock_Metal/')[1] + '</li>')        # DEBUG MODE

# TO DO: read mp3 artis,album,track tags
# TO DO: make it into JSON
# TO DO: send it to the client
