rm -R db/ dists/ pool/
reprepro -Vb. includedeb squeeze archive/*.deb
reprepro -vb. includedsc squeeze archive/hubo-ach_0.1.20130329.dsc
reprepro -Vb. includedeb precise archive/*.deb
reprepro -vb. includedsc precise archive/hubo-ach_0.1.20130329.dsc
