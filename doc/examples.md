OTA_HotelResNotifRQ
===================

Request
-------

    curl -X POST \
      http://localhost:8080/soap/service \
      -H 'Accept: */*' \
      -H 'Cache-Control: no-cache' \
      -H 'Connection: keep-alive' \
      -H 'Content-Type: text/xml; charset=utf-8' \
      -H 'Host: localhost:8080' \
      -H 'Postman-Token: 7cb29a55-61ff-4b31-af00-57981f14ddde,d7852cf0-2f6b-45c1-8768-5d8130b6233b' \
      -H 'User-Agent: PostmanRuntime/7.15.0' \
      -H 'accept-encoding: gzip, deflate' \
      -H 'cache-control: no-cache' \
      -H 'content-length: 9291' \
      -d '<?xml version="1.0" encoding="UTF-8"?>
    <s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
        <s:Header>
            <wsse:Security mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
                <wsse:UsernameToken>
                    <wsse:Username>username</wsse:Username>
                    <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">password</wsse:Password>
                </wsse:UsernameToken>
            </wsse:Security>
        </s:Header>
        <s:Body xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
            <OTA_HotelResNotifRQ EchoToken="e7ddd754-a4b0-4a39-9f03-8fccff0c87bf" TimeStamp="2019-04-09T18:22:54+0800" Version="1" ResStatus="Commit" xmlns="http://www.opentravel.org/OTA/2003/05">
                <POS>
                    <Source>
                        <RequestorID Type="22" ID="{POS_ID}"/>
                        <BookingChannel Primary="true">
                            <CompanyName Code="{POS_CODE}">{POS_NAME}</CompanyName>
                        </BookingChannel>
                    </Source>
                </POS>
                <HotelReservations>
                    <HotelReservation CreateDateTime="2019-04-09T18:22:54+0700">
                        <UniqueID Type="14" ID="{RESERVATION_ID}"/>
                        <RoomStays>
                            <RoomStay>
                                <RoomTypes>
                                    <RoomType RoomTypeCode="{ROOM_CODE}">
                                        <RoomDescription Name="{ROOM_NAME}"/>
                                    </RoomType>
                                </RoomTypes>
                                <RatePlans>
                                    <RatePlan RatePlanCode="{RATE_CODE}">
                                        <RatePlanDescription Name="{RATE_NAME}">
                                            <Text>{RATE_NAME}</Text>
                                        </RatePlanDescription>
                                    </RatePlan>
                                </RatePlans>
                                <RoomRates>
                                    <RoomRate RatePlanCode="{RATE_CODE}" RoomTypeCode="{ROOM_CODE}" NumberOfUnits="1">
                                        <Rates>
                                            <Rate UnitMultiplier="1" ExpireDate="2019-04-16" EffectiveDate="2019-04-14">
                                                <Base AmountAfterTax="500" CurrencyCode="THB"/>
                                                <Total AmountAfterTax="500" CurrencyCode="THB"/>
                                            </Rate>
                                        </Rates>
                                    </RoomRate>
                                </RoomRates>
                                <GuestCounts>
                                    <GuestCount AgeQualifyingCode="10" Count="2"/>
                                </GuestCounts>
                                <TimeSpan Start="2019-04-14" End="2019-04-16"/>
                                <Total AmountAfterTax="500" CurrencyCode="THB"/>
                                <BasicPropertyInfo HotelName="{HOTEL_NAME}" HotelCode="{HOTEL_CODE}"/>
                                <ResGuestRPHs>
                                    <ResGuestRPH RPH="1"/>
                                    <ResGuestRPH RPH="2"/>
                                </ResGuestRPHs>
                            </RoomStay>
                            <RoomStay>
                                <RoomTypes>
                                    <RoomType RoomTypeCode="{ROOM_CODE}">
                                        <RoomDescription Name="{ROOM_NAME}"/>
                                    </RoomType>
                                </RoomTypes>
                                <RatePlans>
                                    <RatePlan RatePlanCode="{RATE_CODE}">
                                        <RatePlanDescription Name="{RATE_NAME}">
                                            <Text>{RATE_NAME}</Text>
                                        </RatePlanDescription>
                                    </RatePlan>
                                </RatePlans>
                                <RoomRates>
                                    <RoomRate RatePlanCode="{RATE_CODE}" RoomTypeCode="{ROOM_CODE}" NumberOfUnits="1">
                                        <Rates>
                                            <Rate UnitMultiplier="1" ExpireDate="2019-04-16" EffectiveDate="2019-04-14">
                                                <Base AmountAfterTax="500" CurrencyCode="THB"/>
                                                <Total AmountAfterTax="500" CurrencyCode="THB"/>
                                            </Rate>
                                        </Rates>
                                    </RoomRate>
                                </RoomRates>
                                <GuestCounts>
                                    <GuestCount AgeQualifyingCode="10" Count="2"/>
                                </GuestCounts>
                                <TimeSpan Start="2019-04-14" End="2019-04-16"/>
                                <Total AmountAfterTax="500" CurrencyCode="THB"/>
                                <BasicPropertyInfo HotelName="{HOTEL_NAME}" HotelCode="{HOTEL_CODE}"/>
                                <ResGuestRPHs>
                                    <ResGuestRPH RPH="1"/>
                                    <ResGuestRPH RPH="2"/>
                                </ResGuestRPHs>
                            </RoomStay>
                        </RoomStays>
                        <ResGuests>
                            <ResGuest ResGuestRPH="1">
                                <Profiles>
                                    <ProfileInfo>
                                        <Profile ProfileType="1">
                                            <Customer>
                                                <PersonName>
                                                    <GivenName>{CUSTOMER_GIVENNAME}</GivenName>
                                                    <Surname>{CUSTOMER_SURNAME}</Surname>
                                                </PersonName>
                                            </Customer>
                                        </Profile>
                                    </ProfileInfo>
                                </Profiles>
                            </ResGuest>
                            <ResGuest ResGuestRPH="2">
                                <Profiles>
                                    <ProfileInfo>
                                        <Profile ProfileType="1">
                                            <Customer>
                                                <PersonName>
                                                    <GivenName>{CUSTOMER_GIVENNAME}</GivenName>
                                                    <Surname>{CUSTOMER_SURNAME}</Surname>
                                                </PersonName>
                                            </Customer>
                                        </Profile>
                                    </ProfileInfo>
                                </Profiles>
                            </ResGuest>
                        </ResGuests>
                        <ResGlobalInfo>
                            <Total AmountAfterTax="1000" CurrencyCode="THB"/>
                            <HotelReservationIDs>
                                <HotelReservationID ResID_Type="14" ResID_Value="{RESERVATION_ID}"/>
                            </HotelReservationIDs>
                            <Profiles>
                                <ProfileInfo>
                                    <Profile ProfileType="1">
                                        <Customer>
                                            <PersonName>
                                                <GivenName>{CUSTOMER_GIVENNAME}</GivenName>
                                                <Surname>{CUSTOMER_SURNAME}</Surname>
                                            </PersonName>
                                        </Customer>
                                    </Profile>
                                </ProfileInfo>
                                <ProfileInfo>
                                    <Profile ProfileType="4">
                                        <CompanyInfo>
                                            <CompanyName>{COMPANY_NAME}</CompanyName>
                                            <AddressInfo>
                                                <AddressLine>{COMPANY_ADDRESS}</AddressLine>
                                                <CityName>{COMPANY_CITY}</CityName>
                                                <PostalCode>{COMPANY_POSTAL_CODE}</PostalCode>
                                                <StateProv>{COMPANY_STATE}</StateProv>
                                                <CountryName Code="{COMPANY_COUNTRY_CODE}">{COMPANY_COUNTRY_NAME}</CountryName>
                                            </AddressInfo>
                                            <TelephoneInfo PhoneNumber="{COMPANY_PHONENUMBER}"/>
                                            <Email>{COMPANY_EMAIL}</Email>
                                        </CompanyInfo>
                                    </Profile>
                                </ProfileInfo>
                            </Profiles>
                        </ResGlobalInfo>
                    </HotelReservation>
                </HotelReservations>
            </OTA_HotelResNotifRQ>
        </s:Body>
    </s:Envelope>'

Response
--------

    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://www.opentravel.org/OTA/2003/05">
        <SOAP-ENV:Body>
            <ns1:OTA_HotelResNotifRS EchoToken="e7ddd754-a4b0-4a39-9f03-8fccff0c87bf" TimeStamp="2019-06-19T15:49:12+07:00" Version="1.0">
                <ns1:Success/>
            </ns1:OTA_HotelResNotifRS>
        </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>

OTA_HotelAvailRQ
================

Request
-------

    curl -X POST \
      http://localhost:8080/soap/service \
      -H 'Accept: */*' \
      -H 'Cache-Control: no-cache' \
      -H 'Connection: keep-alive' \
      -H 'Content-Type: text/xml; charset=utf-8' \
      -H 'Host: localhost:8080' \
      -H 'Postman-Token: 5089ff8c-acef-4bd9-a9a7-571f07cf5e4d,ea041a88-f254-4fb9-a6e6-cce5936e1d8a' \
      -H 'User-Agent: PostmanRuntime/7.15.0' \
      -H 'accept-encoding: gzip, deflate' \
      -H 'cache-control: no-cache' \
      -H 'content-length: 1598' \
      -d '<?xml version="1.0" encoding="utf-8"?>
    <SOAP-ENV:Envelope
            xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
        <SOAP-ENV:Header
                xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
            <wsse:Security soap:mustUnderstand="1"
                           xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd"
                           xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                <wsse:UsernameToken>
                    <wsse:Username>username</wsse:Username>
                    <wsse:Password
                            Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">password</wsse:Password>
                </wsse:UsernameToken>
            </wsse:Security>
        </SOAP-ENV:Header>
        <SOAP-ENV:Body
                xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
            <OTA_HotelAvailRQ
                    xmlns="http://www.opentravel.org/OTA/2003/05" Version="1.0"
                    TimeStamp="2019-06-18T16:39:28+0700"
                    EchoToken="2b2257dd-1e31-41b8-90aa-1a4bef73c723"
                    AvailRatesOnly="true">
                <AvailRequestSegments>
                    <AvailRequestSegment>
                        <HotelSearchCriteria>
                            <Criterion>
                                <HotelRef HotelCode="32" />
                            </Criterion>
                        </HotelSearchCriteria>
                    </AvailRequestSegment>
                </AvailRequestSegments>
            </OTA_HotelAvailRQ>
        </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>'

Response
--------

    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://www.opentravel.org/OTA/2003/05">
        <SOAP-ENV:Body>
            <ns1:OTA_HotelAvailRS EchoToken="2b2257dd-1e31-41b8-90aa-1a4bef73c723" TimeStamp="2019-06-19T16:17:43+07:00" Version="1.0">
                <ns1:Success/>
            </ns1:OTA_HotelAvailRS>
        </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>

OTA_HotelAvailNotifRQ
=====================

Request
-------

    curl -X POST \
      http://localhost:8080/soap/service \
      -H 'Accept: */*' \
      -H 'Cache-Control: no-cache' \
      -H 'Connection: keep-alive' \
      -H 'Content-Type: text/xml; charset=utf-8' \
      -H 'Host: localhost:8080' \
      -H 'Postman-Token: b1260b2e-4622-4e71-9aed-3ecb7ecaf738,6181b905-f141-401e-b845-39faf0e5d142' \
      -H 'User-Agent: PostmanRuntime/7.15.0' \
      -H 'accept-encoding: gzip, deflate' \
      -H 'cache-control: no-cache' \
      -H 'content-length: 3604' \
      -d '<?xml version="1.0" encoding="utf-8"?>
    <SOAP-ENV:Envelope
            xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
        <SOAP-ENV:Header
                xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
            <wsse:Security soap:mustUnderstand="1"
                           xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd"
                           xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                <wsse:UsernameToken>
                    <wsse:Username>username</wsse:Username>
                    <wsse:Password
                            Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">password</wsse:Password>
                </wsse:UsernameToken>
            </wsse:Security>
        </SOAP-ENV:Header>
        <SOAP-ENV:Body
                xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
            <OTA_HotelAvailNotifRQ
                    xmlns="http://www.opentravel.org/OTA/2003/05" Version="1.0"
                    TimeStamp="2019-06-18T16:39:28+0700"
                    EchoToken="2b2257dd-1e31-41b8-90aa-1a4bef73c723"
                    AvailRatesOnly="true">
                <AvailStatusMessages HotelCode="{HOTEL_CODE}">
                    <AvailStatusMessage BookingLimit="0">
                        <StatusApplicationControl InvTypeCode="{ROOM_CODE}" RatePlanCode="{RATE_CODE}" Start="2019-05-27" End="2020-05-25"></StatusApplicationControl>
                        <RestrictionStatus Status="Open" ></RestrictionStatus>
                    </AvailStatusMessage>
                    <AvailStatusMessage>
                        <StatusApplicationControl InvTypeCode="{ROOM_CODE}" RatePlanCode="{RATE_CODE}" Start="2019-05-27" End="2020-05-25"></StatusApplicationControl>
                        <LengthsOfStay>
                            <LengthOfStay MinMaxMessageType="SetMinLOS" Time="1"></LengthOfStay>
                        </LengthsOfStay>
                    </AvailStatusMessage>
                    <AvailStatusMessage>
                        <StatusApplicationControl InvTypeCode="{ROOM_CODE}" RatePlanCode="{RATE_CODE}" Start="2019-05-27" End="2020-05-25"></StatusApplicationControl>
                        <LengthsOfStay>
                            <LengthOfStay MinMaxMessageType="RemoveMaxLOS"></LengthOfStay>
                        </LengthsOfStay>
                    </AvailStatusMessage>
                    <AvailStatusMessage BookingLimit="0">
                        <StatusApplicationControl InvTypeCode="{ROOM_CODE}" RatePlanCode="{RATE_CODE}" Start="2020-05-26" End="2020-05-26"></StatusApplicationControl>
                        <RestrictionStatus Status="Open" ></RestrictionStatus>
                    </AvailStatusMessage>
                    <AvailStatusMessage>
                        <StatusApplicationControl InvTypeCode="{ROOM_CODE}" RatePlanCode="{RATE_CODE}" Start="2020-05-26" End="2020-05-26"></StatusApplicationControl>
                        <LengthsOfStay>
                            <LengthOfStay MinMaxMessageType="SetMinLOS" Time="1"></LengthOfStay>
                        </LengthsOfStay>
                    </AvailStatusMessage>
                    <AvailStatusMessage>
                        <StatusApplicationControl InvTypeCode="{ROOM_CODE}" RatePlanCode="{RATE_CODE}" Start="2020-05-26" End="2020-05-26"></StatusApplicationControl>
                        <LengthsOfStay>
                            <LengthOfStay MinMaxMessageType="RemoveMaxLOS"></LengthOfStay>
                        </LengthsOfStay>
                    </AvailStatusMessage>
                </AvailStatusMessages>
            </OTA_HotelAvailNotifRQ>
        </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>'

Response
--------

    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://www.opentravel.org/OTA/2003/05">
        <SOAP-ENV:Body>
            <ns1:OTA_HotelAvailNotifRS EchoToken="2b2257dd-1e31-41b8-90aa-1a4bef73c723" TimeStamp="2019-06-19T16:36:07+07:00" Version="1.0">
                <ns1:Success/>
            </ns1:OTA_HotelAvailNotifRS>
        </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>

OTA_HotelRateAmountNotifRQ
==========================

Request
-------

    curl -X POST \
      http://localhost:8080/soap/service \
      -H 'Accept: */*' \
      -H 'Cache-Control: no-cache' \
      -H 'Connection: keep-alive' \
      -H 'Content-Type: text/xml; charset=utf-8' \
      -H 'Host: localhost:8080' \
      -H 'Postman-Token: 1c337bf2-0667-4ae3-bf60-12f9e6e3aea6,3b648987-2f09-4da0-b9c1-e8e931e4e14f' \
      -H 'User-Agent: PostmanRuntime/7.15.0' \
      -H 'accept-encoding: gzip, deflate' \
      -H 'cache-control: no-cache' \
      -H 'content-length: 2998' \
      -d '<?xml version="1.0" encoding="utf-8"?>
    <SOAP-ENV:Envelope
            xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
        <SOAP-ENV:Header
                xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
            <wsse:Security soap:mustUnderstand="1"
                           xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd"
                           xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                <wsse:UsernameToken>
                    <wsse:Username>username</wsse:Username>
                    <wsse:Password
                            Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">password</wsse:Password>
                </wsse:UsernameToken>
            </wsse:Security>
        </SOAP-ENV:Header>
        <SOAP-ENV:Body
                xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
            <OTA_HotelRateAmountNotifRQ
                    xmlns="http://www.opentravel.org/OTA/2003/05" Version="1.0"
                    TimeStamp="2019-05-24T11:34:42+0700"
                    EchoToken="41f125b9-b81a-47de-e529-59aa73938e38">
                <RateAmountMessages HotelCode="{HOTEL_CODE}">
                    <RateAmountMessage>
                        <StatusApplicationControl
                                InvTypeCode="{ROOM_CODE}" RatePlanCode="{RATE_CODE}"
                                Start="2019-05-24" End="2020-05-22" />
                        <Rates>
                            <Rate>
                                <BaseByGuestAmts>
                                    <BaseByGuestAmt AgeQualifyingCode="10"
                                                    AmountAfterTax="1000" CurrencyCode="THB" NumberOfGuests="1" />
                                    <BaseByGuestAmt AgeQualifyingCode="10"
                                                    AmountAfterTax="1000" CurrencyCode="THB" NumberOfGuests="2" />
                                </BaseByGuestAmts>
                            </Rate>
                        </Rates>
                    </RateAmountMessage>
                    <RateAmountMessage>
                        <StatusApplicationControl
                                InvTypeCode="{ROOM_CODE}" RatePlanCode="{RATE_CODE}"
                                Start="2020-05-23" End="2020-05-23" />
                        <Rates>
                            <Rate>
                                <BaseByGuestAmts>
                                    <BaseByGuestAmt AgeQualifyingCode="10"
                                                    AmountAfterTax="1000" CurrencyCode="THB" NumberOfGuests="1" />
                                    <BaseByGuestAmt AgeQualifyingCode="10"
                                                    AmountAfterTax="1000" CurrencyCode="THB" NumberOfGuests="2" />
                                </BaseByGuestAmts>
                            </Rate>
                        </Rates>
                    </RateAmountMessage>
                </RateAmountMessages>
            </OTA_HotelRateAmountNotifRQ>
        </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>'
    
Response
--------

    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://www.opentravel.org/OTA/2003/05">
        <SOAP-ENV:Body>
            <ns1:OTA_HotelRateAmountNotifRS EchoToken="41f125b9-b81a-47de-e529-59aa73938e38" TimeStamp="2019-06-19T16:33:47+07:00" Version="1.0">
                <ns1:Success/>
            </ns1:OTA_HotelRateAmountNotifRS>
        </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
