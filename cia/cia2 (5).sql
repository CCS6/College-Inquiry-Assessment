-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 05:30 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cia2`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `collegeID` int(11) NOT NULL,
  `collegeCode` text NOT NULL,
  `collegeName` text NOT NULL,
  `collegeAboutInfo` text NOT NULL,
  `collegeDean` text NOT NULL,
  `collegeEmail` text NOT NULL,
  `collegePhoneNumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`collegeID`, `collegeCode`, `collegeName`, `collegeAboutInfo`, `collegeDean`, `collegeEmail`, `collegePhoneNumber`) VALUES
(1, 'COA', 'College of Agriculture', 'The College of Agriculture emphasizes academic preparation with extensive community practice for leadership in rural Philippines. Courses are geared to understanding our society and to developing skills needed for making agricultural communities productive and financially viable. Silliman University College of Agriculture is an ACAP (Association of Colleges of Agriculture in the Philippines) charter member.<br /><br />\r\nThe College offers degree programs in Bachelor of Science in Agriculture (majors in Animal Science and Agronomy), Bachelor of Science in Agricultural Business and Master in Applied Science (M.App.Sci.) in Systems Agriculture. The Bachelor of Science programs are PAASCU accredited (level II).<br /><br />\r\nThrough a 10-year development program under the sponsorship of the International Development Program that ended in June 1994, a new thrust in learning and teaching agriculture was developed. The initial step was sending all the members of the faculty for either Special Study Program, Masteral or Ph.D. studies in Australia. The Alternative Approach, a new curricular approach that emphasizes experiential learning and systems thinking and practice is now being implemented at Silliman University College of Agriculture.<br /><br />\r\nThe College of Agriculture utilizes an alternative approach to teaching and learning agriculture which emphasizes competency and issue-based learning.<br /><br />\r\nThe competencies expected of a problem solver, and systems manager. It is envisioned that graduates with such competencies can cope with real world prob Federal Republic of Germany with a grant of $90,000. The College has modern lecture rooms and indoor laboratories for animal and plant sciences built in 1977 Another building unit composed of lecture rooms, a laboratory, a library and offices was built in 1980 through the joint support of the Evangelical Central Agency and the Coconut Federation of the Philippines (COCOFED). In addition, it has eight cottages for seniors and juniors constructed at a cost of P1.2 million donated by the COCOFED.<br /><br />', 'Chona Fontelo Javier', 'aggies@su.edu.ph', '035 4225654'),
(2, 'CAS', 'College of Arts and Sciences', 'The College traces its origins to the year 1909 when the then Silliman Institute offered its first classical two-year A.B. course. In 1921, the College obtained recognition for its offering of a four-year A.B. degree. At about the same time, a science course was also offered, a B.S. degree major in Chemistry.During its early years of existence and up to the Second World War, the College operated under two independent colleges: the College of Liberal Arts and the College of Sciences, then administered by Silliman’s Department of Instruction. Over the years, these two colleges operated independently of each other. <br><br>The departments that existed under the set-up were: Bible (1902); Biology (1909); Chemistry (1909); Mathematics (1920); English (1923); and Spanish (1936). In 1947, the College of Liberal Arts and the College of Sciences merged to become the College of Arts and Sciences.\">The Silliman University College of Arts and Sciences is one of the constituent colleges of Silliman University, a private research university found in Dumaguete City, Province of Negros Oriental, Philippines. Granted Level III accreditation status by recognized accrediting agencies in the Philippine educational system, the College provides undergraduate and graduate instruction in various areas of learning such as in the fields of Anthropology,Creative Writing, English Language, Filipino, History, Literature, Philosophy, Political Science, Sociology, Physics, Chemistry, Biology, Mathematics among others.<br><br>The College traces its origins to the year 1909 when the then Silliman Institute offered its first classical two-year A.B. course. In 1921, the College obtained recognition for its offering of a four-year A.B. degree. At about the same time, a science course was also offered, a B.S. degree major in Chemistry.During its early years of existence and up to the Second World War, the College operated under two independent colleges: the College of Liberal Arts and the College of Sciences, then administered by Silliman’s Department of Instruction. Over the years, these two colleges operated independently of each other. <br><br>The departments that existed under the set-up were: Bible (1902); Biology (1909); Chemistry (1909); Mathematics (1920); English (1923); and Spanish (1936). In 1947, the College of Liberal Arts and the College of Sciences merged to become the College of Arts and Sciences.\"><br>The College traces its origins to the year 1909 when the then Silliman Institute offered its first classical two-year A.B. course. In 1921, the College obtained recognition for its offering of a four-year A.B. degree. At about the same time, a science course was also offered, a B.S. degree major in Chemistry.During its early years of existence and up to the Second World War, the College operated under two independent colleges: the College of Liberal Arts and the College of Sciences, then administered by Silliman’s Department of Instruction. Over the years, these two colleges operated independently of each other. <br><br>The departments that existed under the set-up were: Bible (1902); Biology (1909); Chemistry (1909); Mathematics (1920); English (1923); and Spanish (1936). In 1947, the College of Liberal Arts and the College of Sciences merged to become the College of Arts and Sciences.\">The Silliman University College of Arts and Sciences is one of the constituent colleges of Silliman University, a private research university found in Dumaguete City, Province of Negros Oriental, Philippines. Granted Level III accreditation status by recognized accrediting agencies in the Philippine educational system, the College provides undergraduate and graduate instruction in various areas of learning such as in the fields of Anthropology,Creative Writing, English Language, Filipino, History, Literature, Philosophy, Political Science, Sociology, Physics, Chemistry, Biology, Mathematics among others.<br><br>The College traces its origins to the year 1909 when the then Silliman Institute offered its first classical two-year A.B. course. In 1921, the College obtained recognition for its offering of a four-year A.B. degree. At about the same time, a science course was also offered, a B.S. degree major in Chemistry.During its early years of existence and up to the Second World War, the College operated under two independent colleges: the College of Liberal Arts and the College of Sciences, then administered by Silliman’s Department of Instruction. Over the years, these two colleges operated independently of each other. <br><br>The departments that existed under the set-up were: Bible (1902); Biology (1909); Chemistry (1909); Mathematics (1920); English (1923); and Spanish (1936). In 1947, the College of Liberal Arts and the College of Sciences merged to become the College of Arts and Sciences.', 'Earl Jude Paul L. Cleope', 'cas@su.edu.ph', '035 4226002 loc 300'),
(3, 'CBA', 'College of Business Administration', 'Within the framework of the mission statement of Silliman University, the College of Business Administration (CBA) aims to inculcate in the students the philosophy of service to others, nurtured by the ideals of Christian faith as it prepares them for responsible leadership in agriculture, commerce, industry, and government.<br /><br />\r\n\r\nThe CBA offers instruction and training in the generally accepted principles and practices of modern business including personnel, finance, production and marketing. The program in accounting explores accounting concepts, principles and practices in the effective accumulation, development, and communication of financial information for better decision making. Courses in management expose the student to concepts, principles and practices in effective business management. Courses in economics, business mathematics, statistics, computers, business research and law provide an understanding of the environment in which business operates and the analytical tools essential to effective decision making. Proficiency in technical and administrative skills and Christian values are given equal emphasis in the development of a total Christian personality in the business graduate.<br /><br />\r\n\r\nThe College seeks to attain these objectives through a system of selective student admission, superior instruction with a strong Christian orientation, and a high degree of attention to the individual needs of the student. The curricula are designed to be relevant to the needs of the community, the region and the nation, and abreast with the rapid economic, with the rapid economic, social and technological changes. Important linkages in the surrounding community are continually developed and sustained. These will provide opportunities for the students to be aware of problems obtaining in their immediate environment and to learn strategies in solving them.', 'Gloria G. Futalan', 'cba@su.edu.ph', '035 422600'),
(4, 'CCS', 'College of Computer Studies', 'In line with the Commission on Higher Education’s thrust to control the number of Information Technology Education degrees and to centralize its offering within the institution, Silliman University created the College of Information Technology and Computer Sciences. The College became fully operational in June 2001, with Engr. Ang as its Acting Dean. The first degree offerings were the Bachelor of Science in Information Technology (BSIT) and Bachelor of Science in Computer Science (BSCS).In the following year, the College offered the Bachelor of Science in Information Management (BSIM), now known as the Bachelor of Science in Information Systems (BSIS) program.\r\nTo guarantee that effective degrees are offered with appropriate subjects and competent methods, the College had the BSIT degree accredited in May 2004 by the Philippine Accrediting Association of Schools, Colleges and Universities (PAASCU). It was granted Level 1 status.<br /><br />\r\nIn August 2006, the College was renamed to what is now known as the College of Computer Studies (CCS).\r\nThe Commission on Higher Education (CHED) has granted the College the distinction as Center of Development (COD) in Information Technology Education from 2007 to 2010.\r\nFollowing the untimely demise of its Acting Dean in September 2006, Prof. Dave E. Marcial was appointed Dean in June 2007.\r\nTo date, the College continues to service the computer-related courses of the other Colleges in the university as well as offer short courses to the general public.', 'Dave E. Marcial', 'ccs@su.edu.ph', '035 4226002 loc 345'),
(5, 'COE', 'College of Education', 'The College of Education, is duly accredited by the Philippine Association of Accredited Schools, Colleges and Universities (PAASCU). It seeks to provide the integration of the general education curriculum and the professional education of teachers in the secondary, elementary and early childhood levels.It aims to develop teachers with competencies in a chosen discipline – managing teaching learning processes, leading and facilitating groups and organizations imbued with responsibility and accountability, citizenship and service, and commitment to Christian faith and democratic living and to provide, maintain, update relevant programs for related occupations (librarians, dieticians, guidance, counseling) responsive to the emerging needs and demands of educational and other related institutions. To achieve the goals and objectives of the teacher education program, the College provides well-equipped laboratory schools and other facilities for the major fields in cooperation with the various departments of Silliman University. It has a highly qualified faculty with graduate degrees earned here and abroad.<br /><br />\r\nThe College of Education seeks to meet the needs of the following groups of students: those preparing to teach in the early childhood, elementary, and secondary schools and colleges; those preparing for educational work in the trades and industries and in other related fields; those whose major interests are in other fields but who desire courses in education; and graduate students preparing for teaching, guidance counseling and supervisory or administrative positions.', 'Pablito A. Dela Rama', 'coe@su.edu.ph', '035 4226002 loc 360'),
(6, 'CED', 'College of Engineering and Design', 'Silliman University in the last 97 years has grown from a small boy’s school to a large university, among the country’s foremost schools. It all started when Dr. Horace Brinsmade Silliman, a New York philanthropist, gave the American Presbyterian Board of Foreign Missions a initial grant to start a school in the Philippines. In the quiet town of Dumaguete in the province of Negros Oriental, a missionary couple, Dr. and Mrs. David S. Hibbard, opened the school to 15 boys on August 28, 1901 from its humble beginning the school evolved into an institution of higher learning, receiving a university status in 1938. The University’s motto is “Via Veritas Vita”.\r\n<br /><br />\r\n      The College of Engineering started as a Department of Engineering in June 1932, offering an undergraduate program in Civil Engineering. InS March 1935, the Board of Trustees authorized the change in status of Silliman from an Institute to a University. With government approval of this change, Silliman proceeded to adopt additional undergraduate programs in Mining Engineering, Chemical Engineering and Industrial Engineering. The College produced its first graduates of the four-year Civil Engineering program in 1947. It was also in the same year that the first two years of Mechanical Engineering and Electrical Engineering were offered.In 1952, two-year program common to all five-year Engineering courses with complete five-year courses in Civil, Mechanical and Electrical Engineering was offered. In 1998, the five-year course in Computer Engineering was offered under the Mechanical Engineering Department and then the Computer Engineering Department was created in 2000. However in 2002, Computer Engineering and Electrical Engineering Departments were merged into one department, the Electrical and Computer Engineering Department. In 1960, the Uytengsu Hall was put up for offices and classrooms. The construction of this building was made possible with the help of Mr. Tirso Uytengsu, a member of the Board of Trustees and a Silliman Alumnus. He also had previously given a memorial scholarship to bear the name of his son Wentworth, a freshman pre-law student of Silliman University who died a martyr at the hands of Japanese KEMPTEITAI when World War II broke out.\r\n<br /><br />\r\n      In 1970, the Engineering Building was built whereby facilitating additional classroom and laboratory spaces for the College. Its groundbreaking was held on August 28, 1970 and was inaugurated on August 28, 1971 exactly one year later whose guest speaker was the Netherlands Ambassador to the Philippines, Thjark A. Meurs.The Engineering Building also became the site for the College administrative offices, leaving Uytengsu Building mainly for lecture rooms. In 1979, the Charles Bachelor Building was built through a loan grant from the Educational Development Project Implementing Task Force (EDPITAF) and the Asian Development Bank (ADB). It was during the time that late Silliman University President Pedro V. Flores was able to obtain a grant for the payment of the loan from the Charles Bachelor Endowment Fund through the United Board for Christian Higher Education in Asian (UBCHEA).\r\n\r\nIn 1980, the Charles Bachelor Building was commissioned to cater specifically for the need of additional spaces to deliver the Mechanical and Electrical/Electronics laboratory subjects in conjunction with the offering of technology courses.', 'Jesus Jr. G. Amiscaray', 'eng_g@su.edu.ph', '035 4226002 loc 280'),
(7, 'MassCom', 'College of Mass Communication', 'Vision<br />\n<br />\n      A leading communication school in the country committed to develop ethical, competent and socially responsible mass media professionals.<br />\n<br />\nMission<br />\n<br />\nDevelop curricular programs that will hone the skills and enhance the competencies of future mass communicators.<br />\nInstill in future mass communication practitioners a sense of mission and stewardship in their profession.<br />\nPursue opportunities for growth by keeping abreast with developments in communication education and mass media industry.<br />\nObjectives<br />\n<br />\nTo train mass communicators who are liberally educated, socially responsible, professionally competent, ethical, imbued with Christian values and dedicated to public welfare and human development.<br />\nTo train mass communicators who will contribute to national development by advocating a culture of peace, justice and responsible stewardship of the environment.<br />\nTo help strengthen the community press as a catalyst for promoting responsible local governance through an informed citizenry.<br />\nLinkages<br />\n<br />\nThe College is a founding member of the Philippine Association of Communication Educators (PACE).  It maintains professional links with other schools of mass communication in the Philippines as well as with national, Asian and international organizations in communication, such as the Philippine Center for Investigative Journalism (PCIJ), Philippine Press Institute (PPI), Press Foundation of Asia (PFA), the Asian Media Information and  Communication Center (AMIC), International Federation of Environmental Journalists (IFEJ), United Nations Environmental Programme (UNEP), United National  Educational, Scientific and Cultural Organization (UNESCO), and the International Development and Research Center (IDRC) in Canada, among others.<br />\n<br />\nCurricular Program<br />\n<br />\n The Mass Communication program is administered under a separate College independent from the College of Arts and Sciences which is the case with most mass communication programs of other schools in the country. Being the pioneer journalism/masscom school outside Metro Manila, the SU communication program is recognized as a strong program by other communication schools.<br />\n<br />\nThe College offers a basic four-year course leading to the Bachelor of Mass Communication degree.  It is a generalist program with specializations in community journalism, radio-tv broadcasting, advertising and public relations, communication arts and religious communication.<br />\n<br />\nThe BMC curriculum is of two parts — 42 units of core courses and 12 units of electives.  The core courses teach the basic theories, concepts and skills needed in this field.  In addition, the student takes 12 units of electives in any of the following areas: community journalism, community broadcasting, religious communication, advertising and public relations, and environmental journalism.<br />\n<br />\nThe minimum requirements for the mass communication degree are 24 units in language and literature, 16 units in math and natural sciences, 51 units in humanities and social sciences, 6 units in economics,  54 units in communication, and 8 units in physical education offers a Certificate in Environmental Journalism (CEJ). In keeping with its Strategic Development Plan, the faculty started to implement this year plans to develop and offer ladderized courses leading to graduate programs by next school year, including that of a BMC major in Broadcasting.<br />\n<br />\n In addition to its formal offerings, the College conducts seminars, workshops and special courses for campus journalists and mass media professionals from time to time.  It has conducted research in community journalism, journalism education and environmental journalism.<br />\n<br />\nCertificate in Environmental Journalism<br />\n<br />\nThe Certificate in Environmental Journalism (CEJ) is designed to develop/train graduates who are competent in communicating scientific/environmental issues for popular understanding. It provides the student the basic background needed to meet the special demands of covering environmental problems and issues for the mass media, as well as to provide communication support to advocacy activities for the environment.<br />\n<br />\nThe CEJ is a two-semester course built into the BMC curriculum. A student enrolled in the BMC program may work towards the CEJ by choosing it as his or her area of concentration.  In this case he or she takes 18 units under the CEJ curriculum in addition to the 30 units of core courses in the BMC curriculum.<br />\n<br />\nThe CEJ can also be taken as a separate non-degree program for professionals (holders of the BMC or science-related degrees) for professional upgrading.', 'Rosario M. Baseleres', 'masscom@su.edu.ph', '035 4226002 loc 255'),
(8, 'CN', 'College of Nursing', 'The Bachelor of Science in Nursing curriculum is designed to make nursing education relevant to the national development goals and to prepare students for a profession that serves as a vital component in the country’s health system. In accordance with the Policies and Standards of Nursing Education, 1984, the curriculum aims to produce a fully functioning nurse. The graduate must be one who has: (1) developed a sensitive awareness of the health needs of society as well as a commitment to the alleviation of accompanying problems that arises therefrom; (2) acquired the necessary skills, knowledge and attitudes for the promotion of health, prevention of illness, restoration of health and alleviation of suffering; and (3) developed a research attitude through the use of the nursing process. Such attitude among others lead to the utilization of research findings.\r\n<br /><br />\r\nIn addition to the aims of the revised BSN Curriculum, the Silliman University College of Nursing (SUCN) upholds the University’s mission to facilitate the highest quality Christian education (SU Mission Statement, December 6, 1986). The SUCN philosophy states: “ the Person is a unified whole, a responsive member of a family, community and the world who continually contributes to the improvement of the quality of life and environmental well-being within his life span. Nursing is a caring discipline which assists the PERSON in coping with his needs and problems. Utilizing the nursing process, this is achieved by independent practice in collaboration with other disciplines which aim at promoting and restoring health, preventing illness and alleviating human suffering. the Environment covers those tangible and intangible conditions that influence the person’s quality of life.\r\nHealth is the dynamic process of becoming the person one wants to be while upholding the ideals of Christian faith across one’s life span. Nursing Education is a wholistic discipline that facilitates the Person’s acquisition of attitudes, knowledge, and skills towards professional nursing practice and a Christian quality of life. The Practitioner in Nursing is one who has acquired attitudes, knowledge, and skills in order to continually respond constructively to the changing needs of the profession, the health care delivery system and society.\r\n<br /><br />\r\nThe earlier stated general aims, SU mission statement, and SUCN philosophy find concrete translation in all aspects of the educative process. Policies, level objectives, course offerings and their sequence, teaching-learning strategies, interpersonal relationships, co-curricular activities, evaluation methods and others are all in harmony toward accomplishing the Silliman University mission. The attainment of Level III accreditation by the PAASCU, the consistent record of 100% passing average in the national board examinations with 108 topnotchers since 1951, the excellent performance of alumni here and abroad are evidence of the quality education that the College has maintained since it was first established in 1947.\r\n<br /><br />\r\nThe baccalaureate program is aimed at developing students to become well-balanced and well-adjusted professionals who are sensitive to the needs of the community, country and the world. It is also aimed at preparing them for effective and personally satisfying service as a nurse generalist and providing them with a foundation for graduate study.\r\n\r\nThe College’s facilities include an academic building which houses classrooms and offices, laboratories, a Mini-CSR and a women’s dormitory (the Ethel Chapman Dormitory). The College also avails of facilities of several hospitals and agencies for the clinical practice of students. Students learn to apply theories and principles in nursing at the Silliman University Medical Center and the Negros Oriental Provincial Hospital. For practice in rural and community health nursing, they serve at nearby rural health units and at the Dumaguete City Health Department. In addition, the College avails of the facilities of the IPHO Psychiatric Extension Ward for psychiatric nursing experience, the Looc Elementary School, Cantil-e Elementary School and the S.U. Elementary School for school nursing.', 'Evalyn E. Abalos', 'sucn@su.edu.ph', '035 4226002 loc 500'),
(9, 'COPVA', 'College of Performing and Visual Arts', 'The College of Performing and Visual Arts started out in 1912 as the Music Department of the College of Arts and Sciences. Since the beginning, however, the inspiration to create an independent college was already there, even as far back as 1906 when Dr. Walter O. MacIntire organized the Silliman Band. At that time, Silliman founder and first president Dr. David S. Hibbard already spoke of a vision to establish a music school which he hoped would be established sometime in the second quarter of the Silliman University’s existence. \r\n<br /><br />\r\nThis vision was finally fulfilled upon the arrival of American missionary Geraldine Kate who be came the founding school director and first voice teacher of the Silliman Conservatory of Music which was for mally opened in 1934. It existed as such for seven years until it became known as the School of Music in 1941. With firm foundations in both music and dance, the school became the University’s small wonder.\r\n<br /><br />\r\nIt became the live force of culture in Southern Philippines, attracting students from much of Mindanao and the Visayas. With the addition of the Fine Arts Department of the school of Music became the School of Music and Fine Arts in 1969. Eventually, the School of Music and Fine Arts became the College of Performing Arts which officially opened with the college status in June 2001.\r\n', 'Diomar C. Abrio', 'copa@su.edu.ph', '035 4226002 loc 250'),
(10, 'DS', 'Divinity School', 'Silliman University Divinity School is an institution that developed from the brainchild of Dr. Frank Laubach of the American Board Mission (Congregational) in Mindanao. In 1918, Laubach proposed to the Presbyterian Mission to put up a joint Congregationalist-Presbyterian Training School for Visayan-speaking students who want to go into church ministry. He imagined that this Training School could be attached to the Presbyterian Mission’s Silliman Institute in Dumaguete. There were difficulties encountered in the process, but these practical problems were overcome in 1920. Thus, the Silliman Bible School opened in June 1921.\r\n<br /><br />\r\nIn its early years, the Training School offered a two-year diploma course in pastoral ministry to high school graduates. Then the Congregationalists decided to merge its training school for deaconesses based in Cagayan, Misamis Oriental with Silliman Bible School in 1931. This became an impetus for Silliman Bible School to upgrade its curriculum, and offered a four-year college degree in Bachelor of Theology and a three-year Deaconess Diploma Course.\r\n<br /><br />\r\nThe succeeding years witnessed the gradual integration of the Bible School into Silliman Institute. In 1935, the Bible School turned into the “College of Theology” and became a crucial determinant in the transformation of the Silliman Institute into a University in that same year. In 1962, the College moved to its present location and offered a four-year Bachelor of Divinity program, and a five-year Double Major program that evolved into a six-year Combined Degree program.\r\n<br /><br />\r\nThe College of Theology turned out its first batch graduates of Bachelor of Divinity program in 1965. In keeping with the trend of theological schools in other parts of the world, Silliman’s College of Theology was renamed as “Silliman University Divinity School”. In 1966, the Divinity School became a participating institution in the newly established South East Asia Graduate School of Theology (SEAGST). From then on, it began to grant the degree of Master of Theology, and eventually, Doctor of Theology under the then SEAGST.\r\n<br /><br />\r\nIn 1979, the last batch of students under the Combined Degree program graduated. During this time, the majors offered in the past years, namely, Christian Education, Religious Education and Early Childhood Education were abandoned. Only the general Pastoral Ministry program remained. In mid- 1970’s, however, the experimental Bachelor of Ministry and Master of Ministry programs were implemented in response to the clamour of the churches for shorter and less expensive degree programs. However, the result was not satisfactory. Consequently, the Divinity School retrieved the Bachelor of Theology program, and its B.D. program was upgraded into Master of Divinity program, which is the accepted among Protestant churches as the standard theological degree program. Towards the end of the 1990s, the Divinity School offered Bachelor of Theology with major in Liturgy and Music. These Divinity School’s programs are accredited by the Association of Theological Education in South East Asia (ATESEA). These programs are also recognized by the government’s Commission on Higher Education.\r\n<br /><br />\r\nToday, the Divinity School offers revised Bachelor of Theology and Master of Divinity (for non-B.Th. graduates) programs in response to the accreditation standards of ATESEA. The Divinity School also offers to B.Th. graduates a two-year M.Div. thesis track program with major in Biblical Studies, Theology, Pastoral Ministry, Christian Education, Spiritual Care (Clinical Pastoral Education) and Master of Arts in Peace Studies. This program seeks to respond to the needs of the church and its related institutions.\r\n<br /><br />\r\nIn the pipeline are masters and doctoral degree programs in Development Studies, and Values and Peace Education. Also in the pipeline is the Doctor of Ministry, a professional degree, and ladderized courses for certificate programs to equip the lay people for the ministry of the church.\r\n<br /><br />\r\nThe Divinity School has a program called Justice and Peace Center, which is an expression of its concern for justice and peace. Based on biblicotheological framework, this program conducts advocacy work for peace based on justice, and offers to partner communities trainings on fundamentals of peace and peace education, conflict management to conflict transformation, and peacebuilding. It supports the efforts of the Philippine Ecumenical Peace Platform to call for the resumption of peace talks between the Philippine government and a revolutionary group towards the attainment of genuine peace in the country.', 'Jeaneth H. Faller', 'divinity@su.edu.ph', '035 4226002 loc 540'),
(11, 'ICLS', 'Institute of Clinical Laboratory Sciences', 'The Institute of Clinical Laboratory Sciences (ICLS) began as a program under the Biology Department of the College of Arts and Sciences in 1970. By 1987, the program was transferred under the College of Arts and Sciences as the Medical Technology Department. The move brought along with it more enrollees and more faculty as well as autonomy to the unit. Changes in the B.S. Medical Technology Curriculum design were instituted thus improving the teaching-learning approaches of the course. These improvements led to exemplary performances in the Medical Technology licensure examination over the years as well as its accreditation under the PAASCU.\r\n<br /><br />\r\nSchool Year 1995-96 brought along with it organizational change with the transfer of the Medical Technology Department to a newly created College of Nursing and Allied Health Sciences (CNAHS). The Dean of the College of Nursing headed the new college. With this new change, the department was transferred to a new building which was named after its donor Angelo King. Located at the Silliman University Medical Center Compound, Angelo King Building houses the Institute of Rehabilitative Science and the Institute of Clinical Laboratory Sciences.\r\n<br /><br />\r\nNew developments however once again changed the history of the Medical Technology Program. In May 2009, the Silliman Board of Trustees approved the creation of the Institute of Clinical Laboratory Sciences with Asst. Prof. Teodora A. Cubelo as its first Director. Today, ICLS had continued to excel as an academic unit in the university. Given a Level II 5-year reaccreditation by PAASCU it continues to endeavor to achieve a PAASCU Level III accreditation.\r\n<br /><br />\r\nICLS is an active member of the Philippine Association of Schools of Medical Technology and Public Health (PASMETH) and was recently awarded Dr. Gustavo U. Reyes Institutional Award as one of the active member school of PASMETH. ICLS also hosted the 40th Annual PASMETH National Convention in May 2010. This significant event gave Silliman University an opportunity to showcase its Christian Culture of teaching-learning: Faith, Instruction, Research and Extension to other member schools in the country.', 'Jusie A. Bernal', 'medtech@su.edu.ph', '035 4226002 loc 375'),
(12, 'IRS', 'Institute of Rehabilitative Sciences', 'Physical Therapy is a Science and Art of treatment by means if therapeutic exercise, heat, cold, light, water,manual manipulation, electricity, and other physical agents. It is an allied medical profession which develops,coordinates, and utilizes selected knowledge and skills in planning,organizing, directing, and evaluating programs for the care of individuals whose ability to function is impaired or threatened by disease or injury.Physical Therapy requires anin-depth knowledge of human growth and development, human anatomy and physiology, neuro anatomy and neurophysiology, biomechanics and abnormal psychological responses toinjury, sickness and disability, and thecultural and socio-economic influences of the individual.\r\n<br /><br />The goal of Physical Therapyis to help the patient reach maximum potential and to assume her/his dueplace in society while learning to live within the limits of such capabilities.The Physical Therapist works underthe supervision of the Physiatrist, the Rehabilitation Medicine specialist.The Physical Therapist functionsin these general types of positions: \r\n<br /><br />\r\n1. as staff in a supervisory position who provides direct services to the patient in a hospital setting;.<br />\r\n2. as teacher in a clinical and academic setting; and.<br />\r\n3. as administrator of a programin an educational institution, a clinical department, or a health agency.\r\n<br /><br />\r\nStatement of Philosophy\r\nThe faculty of the SU PhysicalTherapy Program believe that:The human being is createdin the image and likeness of god— a unique yet unified whole withspiritual, biological, mental, emotional,socio-cultural and environmentalcomponents. As a member of a family,a community and the world, his dayto-day encounter with life affects thewholeness of an individual.\r\n<br /><br />\r\nPhysical Therapy is ahumanistic science that seeks to assist the person in meeting his/herhealth needs and problems. This isachieved through independent practiceor in collaboration with health andnon-health disciplines by promotingand restoring health, preventing illnessand treating disease conditions, andby improving functional capabilitiesthat provide the best care throughrehabilitative techniques.Physical Therapist is one whohas acquired the essential knowledge,skills and desirable attitudes so thathe/she can function efficiently in anywork setting.', 'Cyflor E. Putong', 'supt@su.edu.ph', '035 4226002 loc 560'),
(13, 'SPAG', 'School of Public Affairs and Governance', 'The Silliman University School of Public Affairs and Governance believes in governance that looks into the heart rather than at the appearance of things or phenomena (1 Sam 16:7). The school maintains that no facts exist except those that are disclosed in the interpretation of what is already understood (Salazar, 2001). As Salazar aptly puts it, “We can have a million facts in our heads and still remain uneducated.” \r\n<br /><br />\r\nFor the SU-SPAG, the goal of real education is to enable students to stand in the truth that manifests in our existence, not just accumulate mere facts through a predefined theory for practical considerations. Facts do not give us true knowledge, since true knowledge can only spring from a system of knowing wherein one is able to learn. The sense of this education, which is fundamental in our search for truth and which one can learn in SPAG, is ensconced in the words of Martin Heidegger (1987): But to know means: to be able to stand in the truth. Truth is the manifestness of the essence (i.e., existence). To know is accordingly to stand in the manifestness of the essence, to endure it. Merely to have information, however abundant, is not to know. Even if curricula and examination requirements concentrate this information into what is of the greatest practical importance, it still does not amount to knowledge. XXX The man who possesses such information and learned a few practical tricks, will still be perplexed in the presence of reality, which is always different from what the Philistine means by down-to-earth; he will always be a bungler. Why? Because he has no knowledge, for to know means to be able to learn.\r\n<br /><br />\r\nHeidegger’s thought process exposes the obsolescence of the calculative academics whose thought processes have matured in the existing performance measurement approaches that rely primarily on financial accounting measures which, according to Kaplan and Morton (1996), are “becoming obsolete.” In the Philippine setting, the same thinking process paves the “ground of thoughtlessness” in NEDA’s penchant for constructing arbitrary macroeconomic and financial performance indicators which have led Philippine governance to nowhere but backwardness.\r\n<br /><br />\r\nAs an agent of change in governance, the SPAG has redirected its learning thought processes to a transcendental mode of understanding reality for strategic decision-making in governance. In this approach to knowing, SPAG’S calculative learning mechanisms are grounded on meditative learning, which enables students to stand in the self-showing of what is there to learn from reality. This self-showing of reality nourishes the calculative thinking of the students to develop key result areas for strategic action in governance. Following the logic of transcendental knowing and strategic decision making, the school expects to develop a new set of graduates who can overcome over-reliance on the financial accounting measures that are used in existing governance.\r\n<br /><br />\r\nThese performance measures only encourage the development of what Heidegger calls “flight-from thinking” that grounds the prevailing thoughtlessness (Heidegger, 1967). Thus, SPAG’s calculative thinking in terms of established balanced governance KRA (Key Result Areas) measurement approach to learning for good governance is a meditative thinking articulation that will give its students “a system to communicate and to align good governance to new strategies (see also KPMG-NN Institute, 1990).', 'Jenny L. Chiu', 'spag@su.edu.ph', '035 4226002 loc 364');

-- --------------------------------------------------------

--
-- Table structure for table `collegeanskey`
--

CREATE TABLE `collegeanskey` (
  `ansKeyID` int(11) NOT NULL,
  `collegeID` int(11) NOT NULL,
  `questionID` int(11) NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegeanskey`
--

INSERT INTO `collegeanskey` (`ansKeyID`, `collegeID`, `questionID`, `answer`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 1),
(3, 1, 3, 2),
(4, 1, 4, 1),
(5, 1, 5, 0),
(6, 1, 6, 0),
(7, 1, 7, 1),
(8, 1, 8, 3),
(9, 1, 9, 2),
(10, 1, 10, 4),
(11, 2, 1, 1),
(12, 2, 2, 0),
(13, 2, 3, 4),
(14, 2, 4, 3),
(15, 2, 5, 4),
(16, 2, 6, 4),
(17, 2, 7, 4),
(18, 2, 8, 3),
(19, 2, 9, 2),
(20, 2, 10, 2),
(21, 3, 1, 4),
(22, 3, 2, 4),
(23, 3, 3, 4),
(24, 3, 4, 3),
(25, 3, 5, 3),
(26, 3, 6, 2),
(27, 3, 7, 0),
(28, 3, 8, 2),
(29, 3, 9, 3),
(30, 3, 10, 1),
(31, 4, 1, 4),
(32, 4, 2, 0),
(33, 4, 3, 1),
(34, 4, 4, 1),
(35, 4, 5, 0),
(36, 4, 6, 3),
(37, 4, 7, 0),
(38, 4, 8, 1),
(39, 4, 9, 0),
(40, 4, 10, 0),
(41, 5, 1, 1),
(42, 5, 2, 2),
(43, 5, 3, 4),
(44, 5, 4, 4),
(45, 5, 5, 3),
(46, 5, 6, 2),
(47, 5, 7, 1),
(48, 5, 8, 4),
(49, 5, 9, 3),
(50, 5, 10, 2),
(51, 6, 1, 3),
(52, 6, 2, 2),
(53, 6, 3, 1),
(54, 6, 4, 2),
(55, 6, 5, 0),
(56, 6, 6, 4),
(57, 6, 7, 0),
(58, 6, 8, 1),
(59, 6, 9, 2),
(60, 6, 10, 2),
(61, 7, 1, 3),
(62, 7, 2, 0),
(63, 7, 3, 4),
(64, 7, 4, 4),
(65, 7, 5, 3),
(66, 7, 6, 0),
(67, 7, 7, 0),
(68, 7, 8, 2),
(69, 7, 9, 4),
(70, 7, 10, 1),
(71, 8, 1, 3),
(72, 8, 2, 0),
(73, 8, 3, 4),
(74, 8, 4, 3),
(75, 8, 5, 3),
(76, 8, 6, 3),
(77, 8, 7, 4),
(78, 8, 8, 4),
(79, 8, 9, 3),
(80, 8, 10, 2),
(81, 9, 1, 0),
(82, 9, 2, 1),
(83, 9, 3, 4),
(84, 9, 4, 4),
(85, 9, 5, 2),
(86, 9, 6, 0),
(87, 9, 7, 0),
(88, 9, 8, 0),
(89, 9, 9, 4),
(90, 9, 10, 3),
(91, 10, 1, 0),
(92, 10, 2, 0),
(93, 10, 3, 4),
(94, 10, 4, 3),
(95, 10, 5, 3),
(96, 10, 6, 1),
(97, 10, 7, 1),
(98, 10, 8, 4),
(99, 10, 9, 4),
(100, 10, 10, 3),
(101, 11, 1, 4),
(102, 11, 2, 0),
(103, 11, 3, 3),
(104, 11, 4, 2),
(105, 11, 5, 2),
(106, 11, 6, 3),
(107, 11, 7, 4),
(108, 11, 8, 4),
(109, 11, 9, 2),
(110, 11, 10, 0),
(111, 12, 1, 2),
(112, 12, 2, 1),
(113, 12, 3, 2),
(114, 12, 4, 2),
(115, 12, 5, 1),
(116, 12, 6, 2),
(117, 12, 7, 4),
(118, 12, 8, 4),
(119, 12, 9, 3),
(120, 12, 10, 3),
(121, 13, 1, 3),
(122, 13, 2, 4),
(123, 13, 3, 4),
(124, 13, 4, 2),
(125, 13, 5, 3),
(126, 13, 6, 2),
(127, 13, 7, 0),
(128, 13, 8, 3),
(129, 13, 9, 3),
(130, 13, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degreeID` int(11) NOT NULL,
  `collegeID` int(11) NOT NULL,
  `degreeCode` text NOT NULL,
  `degreeDesc` text NOT NULL,
  `degreeJobs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degreeID`, `collegeID`, `degreeCode`, `degreeDesc`, `degreeJobs`) VALUES
(1, 1, 'BSAB', 'Bachelor of Science in Agricultural Business\r\n', 'Farm appraiser\r\nAgricultural policy analyst\r\nFarm manager\r\nCrop producer\r\nGrain and livestock buyer\r\nMarket analyst\r\nFinancier \r\nQuality controller\r\nMarketing head'),
(2, 1, 'BSAA', 'Bachelor of Science in Agriculture Major in Agronomy and Animal Science', 'Horticulturist\nFish farm manager\nIrrigation Specialists \nRural practice surveyor\nGrain and livestock buyer \nMarket analyst Financier\nQuality controller\nMarketing head'),
(3, 2, 'BSP', 'Bachelor of Science in Physics', 'Accelerator Operator\r\nApplications Engineer\r\nData Analyst\r\nDesign Engineer\r\nPhysics Teacher'),
(4, 2, 'BACW', 'Bachelor of Arts Major in Creative Writing', 'Advertising copywriter\r\nArts administrator\r\nCreative director\r\nDigital copywriter\r\nEditorial assistant'),
(5, 2, 'BAF', 'Bachelor of Arts Major in Filipino', 'Filipino teacher\r\n'),
(6, 2, 'BSM', 'Bachelor of Science Mathematics', 'Chartered accountant\r\nChartered certified accountant\r\nData analyst\r\nInvestment analyst\r\nResearch scientist (maths)\r\nSecondary school teacher'),
(7, 3, 'BSA', 'Bachelor of Science in Accountancy', 'Accounting Clerk\r\nAuditing Clerk\r\nAccounts Receivable Clerk\r\nAccounting Assistant\r\nAccounts Payable Clerk\r\nBookkeeper'),
(8, 3, 'BSMgt', 'Bachelor of Business Administration Major in Management', 'Human resources officer\r\nLogistics and distribution manager\r\nMarketing executive\r\nRetail manager\r\nSales executive'),
(9, 3, 'BSOM', 'Bachelor of Science in Office Management', 'Retail manager\r\nSales executive\r\nSystems analyst'),
(10, 3, 'BBAE', 'Bachelor of Business Administration Major in Economics', 'Chartered accountant\r\nChartered certified accountant\r\nChartered public finance accountant\r\nData analyst\r\nEconomist'),
(11, 3, 'BSCA', 'Bachelor of Science in Business Computer Applications', 'Software developer\r\nComputer programmer\r\nApplications developer\r\nProgrammer analyst'),
(12, 4, 'BSIT', 'Bachelor of Science in Information Technology', 'Application analyst.\r\nData analyst.\r\nDatabase administrator.\r\nInformation systems manager.\r\nIT consultant.'),
(13, 4, 'BSIS', 'Bachelor of Science in Information Systems', 'Database administrator\r\nInformation systems manager\r\nIT consultant\r\nIT technical support officer\r\nSystems analyst'),
(14, 4, 'BSCS', 'Bachelor of Science in Computer Science', 'Games developer\r\nSystems analyst\r\nSystems developer\r\nUX analyst\r\nWeb designer'),
(15, 5, 'BEEGE', 'Bachelor of Elementary Education Major in General Education', 'Community education officer\r\nEarly years teacher\r\nEducation administrator\r\nPrimary school teacher\r\nSecondary school teacher'),
(16, 5, 'BEEP', 'Bachelor of Elementary Education Major in Pre-School', 'Preschool teacher\r\nTeacher assistant\r\nChildcare worker\r\nChildcare center director\r\n'),
(17, 5, 'BEESE', 'Bachelor of Elementary Education Major in Special Education', 'Special education teacher\r\nReading Specialist\r\nGuidance Counselor\r\nSpecial Education Advocate\r\nEducational Consultant'),
(18, 5, 'BSEng', 'Bachelor of Secondary Education Major in English', 'Editorial assistant.\r\nEnglish as a foreign language teacher\r\nLexicographer\r\nMagazine journalist\r\nHigh School English teacher'),
(19, 5, 'BSEMAPEH', 'Bachelor of Secondary Education Major in MAPEH', 'Community education officer\r\nEarly years teacher\r\nEducation administrator\r\nPre-School Music teacher\r\n'),
(20, 5, 'BSEM', 'Bachelor of Secondary Education Major in Math', 'Math Assistant\r\nHigh-School Math teacher\r\nElementary Math teacher \r\n'),
(21, 5, 'BSEPS', 'Bachelor of Secondary Education Major in Physical Science', 'Performance Analysis\r\nTeacher\r\nCoach\r\nPhysical Trainer'),
(22, 5, 'BSND', 'Bachelor of Science in Nutrition and Dietetics', 'Clinical Dietetics\r\nFood and Nutrition Management\r\nPublic Health Nutrition\r\nEducation and Research'),
(23, 6, 'BDCpE', 'Bachelor of Science in Computer Engineering', 'Engineering Educator\r\ncomputer hardware engineers\r\ncomputer systems designer\r\nComputer and Information Systems Managers\r\nComputer and Information Research Scientists '),
(24, 6, 'BSEE', 'Bachelor of Science in Electrical Engineering', 'Broadcast engineer\r\nControl and instrumentation engineer\r\nDesign engineer\r\nElectrical engineer\r\nElectronics engineer'),
(25, 6, 'BSCE', 'Bachelor of Science in Civil Engineering', 'civil engineering design technologist\r\nfoundation technologist\r\nconstruction engineering technician\r\nland use technician\r\nroad traffic technician\r\nstructural engineering technician'),
(26, 6, 'BSME', 'Bachelor of Science in Mechanical Engineering', 'Automotive engineer\r\nContracting civil engineer\r\nControl and instrumentation engineer\r\nMaintenance engineer\r\nMechanical engineer'),
(27, 6, 'BSArchi', 'Bachelor of Science in Architecture', 'Building surveyor\r\nCommercial/residential surveyor\r\nHigher education lecturer\r\nHistoric buildings inspector/conservation officer\r\nLandscape architect\r\nPlanning and development surveyor'),
(28, 5, 'BSEBS', 'Bachelor of Secondary Education Major in Biological Sciecne', 'Higher education lecturer\r\nMicrobiologist\r\nNature conservation officer\r\nPharmacologist\r\nPhysician associate\r\nSecondary school teacher'),
(29, 7, 'BMC', 'Bachelor of Mass Communication', 'Corporate Communications Manager\r\nCommunications Director\r\nContent Marketing Manager\r\nAdvertising Broadcast Producer\r\nJournalist'),
(30, 7, 'BMCB', 'Bachelor of Mass Communication Major in Broadcasting', 'News Anchor\r\nNews Writer\r\nNews Directors\r\nStudio Engineers'),
(31, 8, 'BSN', 'Bachelor of Science in Nursing', 'Certified Hemodialysis Nurse\r\nPerioperative Nurse\r\nRegistered Nurse\r\nNurse Case Manager\r\nDisease Management Nurse'),
(32, 9, 'BMCC', 'Bachelor of Music Major in Choral Conducting', 'Assistant Professor of Music & Director of Choral Activities\r\nAssistant Teaching Professor\r\nDirector of Music and Liturgy\r\nChoral Conductor'),
(33, 9, 'BMCA', 'Bachelor of Music Major in Composition and Arranging', 'Arts administrator\r\nArts writer\r\nArts consultant\r\nBand manager\r\nChoral conductor\r\nMusic producer'),
(34, 9, 'BMV', 'Bachelor of Music Major in Voice', 'Vocal Performer\r\nVocal coach\r\nMusic teacher\r\n'),
(35, 9, 'BFA', 'Bachelor of Fine Arts', 'Exhibition designer\r\nFine artist\r\nFurther education teacher\r\nHigher education lecturer\r\nIllustrator\r\nMuseum/gallery curator'),
(36, 9, 'BASTA', 'Bachelor of Arts Major in Speech and Theater Arts', 'Actor\r\nArt Director\r\nStage Manager\r\nTechnical Director\r\nSet Designer\r\nCostume Designer\r\nLighting Technician'),
(37, 9, 'BMME', 'Bachelor of Music Major in Music Education', 'Music Teacher\r\nCollege, Conservatory, or University Music Teacher\r\nMusicologist\r\nPrivate Instrument Teacher\r\nMusic Librarian'),
(38, 10, 'BLCM', 'Bachelor of Liturgy and Church Music', 'Director of Music and Liturgy\r\nExecutive Creative Director\r\nMusic Coordinator\r\nDirector of Music Ministries, Organist and Pianist'),
(39, 10, 'BTPM', 'Bachelor of Theology Major in Pastoral Ministry', 'Pastor\r\nSocial Workers\r\nPostsecondary Teachers\r\nChaplain '),
(40, 11, 'BSMT', 'Bachelor of Science in Medical Technology', 'Medical Technologist\r\nSupervisory Medical Technologist \r\nLab technician\r\nLaboratory assistant'),
(41, 12, 'BSPT', 'Bachelor of Science in Physical Therapy', 'Physical Therapist\r\nPhysical Therapist Assistant\r\nChiropractor\r\nRecreational Therapist\r\n'),
(42, 13, 'BSFA', 'Bachelor of Science in Foreign Affairs', 'Civil Service fast streamer\r\nGovernment social research officer\r\nPolitician\'s assistant\r\nPublic affairs consultant\r\nPublic relations account executive\r\nSocial researcher'),
(43, 13, 'BSPA', 'Bachelor of Science in Public Administration', 'Charity officer\r\nCivil Service administrator\r\nGovernment social research officer\r\nHealth service manager\r\nHousing manager/officer\r\nLocal government officer');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionID` int(2) NOT NULL,
  `questionText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionID`, `questionText`) VALUES
(1, 'Your degree has you use computers on a daily basis'),
(2, 'Your degree requires you to have financial literacy.'),
(3, 'Your degree is socially based.'),
(4, 'The word \"enthusiastic\" describes your degree.'),
(5, 'You have an interest in the study of people\'s culture.'),
(6, 'You love math.'),
(7, 'You are interested in the human anatomy.'),
(8, 'You love to teach or help others.'),
(9, 'You are confident at public speaking.'),
(10, 'Your ideal career will most likely be outdoors.');

-- --------------------------------------------------------

--
-- Table structure for table `resulttable`
--

CREATE TABLE `resulttable` (
  `resultTableID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `questionID` int(11) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resulttable`
--

INSERT INTO `resulttable` (`resultTableID`, `userID`, `questionID`, `answer`) VALUES
(1, 1, 1, '1'),
(2, 1, 2, '0'),
(3, 1, 3, '2'),
(4, 1, 4, '1'),
(5, 1, 5, '3'),
(6, 1, 6, '2'),
(7, 1, 7, '4'),
(8, 1, 8, '4'),
(9, 1, 9, '1'),
(10, 1, 10, '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userType` text NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `resultCollege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userType`, `firstName`, `lastName`, `username`, `password`, `resultCollege`) VALUES
(1, 'admin', 'Charles', 'Carino', 'charlescarino4', 'ee26bed8a2062297dbe8ee28f8644963', ''),
(2, 'admin', 'Seth', 'Cornelio', 'KuyaKoya', '59a30953279a35745bd700f3a020c5ed', ''),
(3, 'user', 'Angel', 'Ross', 'angelross', '098f6bcd4621d373cade4e832627b4f6', ''),
(5, 'admin', 'test', 'test', 'testttt', 'e3361486e153b26b36aad2f01e6c90c6', ''),
(11, 'admin', 'asdf', 'dsfa fdsa', 'qwer', '25ab3b38f7afc116f18fa9821e44d561', '');

-- --------------------------------------------------------

--
-- Table structure for table `userans`
--

CREATE TABLE `userans` (
  `useransID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `questionID` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `datetime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userans`
--

INSERT INTO `userans` (`useransID`, `userID`, `questionID`, `answer`, `datetime`) VALUES
(1, 1, 1, 1, NULL),
(2, 1, 2, 0, NULL),
(3, 1, 3, 2, NULL),
(4, 1, 4, 1, NULL),
(5, 1, 5, 3, NULL),
(6, 1, 6, 2, NULL),
(7, 1, 7, 4, NULL),
(8, 1, 8, 4, NULL),
(9, 1, 9, 1, NULL),
(10, 1, 10, 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`collegeID`);

--
-- Indexes for table `collegeanskey`
--
ALTER TABLE `collegeanskey`
  ADD PRIMARY KEY (`ansKeyID`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degreeID`),
  ADD KEY `collegeID` (`collegeID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionID`);

--
-- Indexes for table `resulttable`
--
ALTER TABLE `resulttable`
  ADD PRIMARY KEY (`resultTableID`),
  ADD KEY `collegeID` (`userID`),
  ADD KEY `questionID` (`questionID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `userans`
--
ALTER TABLE `userans`
  ADD PRIMARY KEY (`useransID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `questionID` (`questionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `collegeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `collegeanskey`
--
ALTER TABLE `collegeanskey`
  MODIFY `ansKeyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `degreeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `userans`
--
ALTER TABLE `userans`
  MODIFY `useransID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `degree_ibfk_1` FOREIGN KEY (`collegeID`) REFERENCES `college` (`collegeID`);

--
-- Constraints for table `resulttable`
--
ALTER TABLE `resulttable`
  ADD CONSTRAINT `resulttable_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `resulttable_ibfk_2` FOREIGN KEY (`questionID`) REFERENCES `question` (`questionID`);

--
-- Constraints for table `userans`
--
ALTER TABLE `userans`
  ADD CONSTRAINT `userans_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `userans_ibfk_2` FOREIGN KEY (`questionID`) REFERENCES `question` (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
