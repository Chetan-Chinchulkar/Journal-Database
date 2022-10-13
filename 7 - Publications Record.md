7 - Publications Record
Need to store details of publications of students and faculty. Record of every publication to be maintained:
a) <jour_pub, jour_id, paper_title, volume_no, issue_no, year, pages>
b) <conf_pub, conf_id, paper_title, conf_no, year, place, pages>
c) <jour_pub, fac_id>
d) <jour_pub, roll_no>
e) f)
Table Table Table Table Table
<conf_pub, fac_id> <conf_pub, roll_no>
of Faculty < fac_id, fac_name, dept_id, password>
of Research Scholars <roll_no, name, dept_id, password> of Departments <dept_id, dept_name>
of Journals <jour_id, jour_name>
of Conferences <conf_id, conf_name>
To Do:
1) Bulk loading of tables has to be done.
2) Add a publication (all the authors, journal/conference, Title, etc., as shown in the tables)
3) List of publications in a particular financial year: all, journals, conferences; Department-wise,
Institute-wise
4) List of publications of a particular faculty – for a particular year, for all years.
Sample publication Entries:
L. Deka and G. Barua, “On-line Consistent Backup in Transactional File Systems,” in Proceedings of the first ACM Asia-Pacific Workshop on Systems, August 2010, pp. 37–42.
D. Porter, O. Hofmann, C. Rossbach, A. Benn, and E.Witchel, “Operating Systems Transactions,” in Proceedings of the 22nd ACM Symposium on Operating Systems Principles, October 2009, pp. 161– 176.
Z. Peterson and R. Burns, “Ext3cow: a Time-Shifting File System for Regulatory Compliance,” in ACM Transactions on Storage, vol. 1, No. 1, May 2005, pp. 190–212.
L. Deka roll no is 2 G. Barua fac_id is 1
There will be an entry in the conference table for ACM Symposium on Operating System Principles with conf_id 1.
So, there will be an entry in table b) for this publication with conf_pub=1, conf_id =1, paper_title = On- line Consistent Backup in Transactional File Systems, conf_no=26, year=2010, pages = 37-42
Then in table e) entry will be conf_pub = 1, fac_id = 1 In table f) entry will be conf_pub = 1, roll_no = 2