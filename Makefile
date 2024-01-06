ifndef VERBOSE
.SILENT:
endif

SAPIS=cli fpm apache

.PHONY: all
all: clean test

.PHONY: clean
clean:
	rm -f output.txt

.PHONY: test
test: $(patsubst %,test-%,$(SAPIS))

.PHONY: test-%
test-%: 
	make -f Makefile-sapi SAPI=$* test
