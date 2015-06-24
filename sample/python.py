# Code taken from https://wiki.python.org/moin/SimplePrograms

BOARD_SIZE = 8

class BailOut(Exception):
	pass

def validate(queens):
	left = right = col = queens[-1]
	for r in reversed(queens[:-1]):
		left, right = left-1, right+1
		if r in (left, col, right):
			raise BailOut

def add_queen(queens):
	for i in range(BOARD_SIZE):
		test_queens = queens + [i]
		try:
			validate(test_queens)
			if len(test_queens) == BOARD_SIZE:
				return test_queens
			else:
				return add_queen(test_queens)
		except BailOut:
			pass
	raise BailOut

queens = add_queen([])
print queens
print "\n".join(". "*q + "Q " + ". "*(BOARD_SIZE-q-1) for q in queens)

##### UNITTEST #####

import unittest
def median(pool):
	copy = sorted(pool)
	size = len(copy)
	if size % 2 == 1:
		return copy[(size - 1) / 2]
	else:
		return (copy[size / 2 - 1] + copy[size / 2]) / 2

class TestMedian(unittest.TestCase):
	def testMedian(self):
		self.failUnlessEqual(median([2, 9, 9, 7, 9, 2, 4, 5, 8]), 7)

if __name__ == '__main__':
	unittest.main()

##### CSV #####
import csv

writer = csv.writer(open('stocks.csv', 'wb', buffering = 0))
writer.writerows([
	('GOOG', 'Google, Inc.', 505.24, 0.47, 0.09),
	('YHOO', 'Yahoo! Inc.', 27.38, 0.33, 1.22),
	('CNET', 'CNET Networks, Inc.', 8.62, -0.13, -1.49)
])

stocks = csv.reader(open('stocks.csv', 'rb'))
status_labels = {-1: 'down', 0: 'unchanged', 1: 'up'}
for ticker, name, price, change, pct in stocks:
	status = status_labels[cmp(float(change), 0.0)]
	print '%s is %s (%s%%)' % (name, status, pct)