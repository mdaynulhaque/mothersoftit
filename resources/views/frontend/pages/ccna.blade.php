@extends('frontend.layouts.master')

@section('content')
{{-- about top --}}
<section class="about-top ">
	<div class="top-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=""><br>
						<h2 class="text-uppercase text-light text-center  my-5 animated fadeInLeft delay 2s">Advanced CCNA Course</h2>
					</div>
				</div>
			</div>
		</div>
</section>

{{-- about explIN  --}}
<section class="py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col text-muted">
				<p class="my-3">Lesson 01:Compare and contrast OSI and TCP/IP models</p>
				<p class="my-3">Compare and contrast OSI and TCP/IP models</p>
				<p class="my-3">Lesson 02:Compare and contrast TCP and UDP protocols</p>
				<p class="my-3">Compare and contrast TCP and UDP protocols</p>
				<p class="my-3">Lesson 03:Describe the impact of infrastructure components in an enterprise network</p>
				<p class="my-3">Firewalls</p>
				<p class="my-3">Access points</p>
				<p class="my-3">Wireless controllers</p>
				<p class="my-3">Lesson 04:Compare and contrast network topologies</p>
				<p class="my-3">Star ,Mesh ,Hybrid</p>
				<p class="my-3">Lesson 05:Select the appropriate cabling type based on implementation requirements</p><p class="my-3">Select the appropriate cabling type based on implementation requirements</p>
				<p class="my-3">Lesson 06:Apply troubleshooting methodologies to resolve problems</p><p class="my-3">Perform and document fault isolation
				,Resolve or escalate , Verify and monitor resolution ,Configure, verify, and troubleshoot IPv4 addressing and subnetting</p><p class="my-3">Lesson 07: Compare and contrast IPv4 address types</p><p class="my-3">
					Unicast ,Broadcast ,Multicast<br><br>

Lesson 08:Describe the need for private IPv4 addressing<br><br>

Describe the need for private IPv4 addressing,

Identify the appropriate IPv6 addressing scheme to satisfy addressing requirements in a LAN/WAN environment

,Configure, verify, and troubleshoot IPv6 addressing ,

Configure and verify IPv6 Stateless Address Auto Configuration,<br><br>

Lesson 09:Compare and contrast IPv6 address types <br><br>

Global unicast,

Unique local,

Link local,

Multicast,

odified EUI,

Autoconfiguration,

Anycast,<br><br>

Lesson 10: Describe and verify switching concepts<br><br>

MAC learning and aging,

Frame switching,

Frame flooding,

MAC address table,

Interpret Ethernet frame format,

Troubleshoot interface and cable issues (collisions, errors, duplex, speed).<br><br>

Lesson 11: Configure, verify, and troubleshoot VLANs (normal/extended range) spanning multiple switches<br><br>

Access ports (data and voice),

Default VLAN<br><br>

Lesson 12: Configure, verify, and troubleshoot interswitch connectivity<br><br>

Trunk ports,

Add and remove VLANs on a trunk,

DTP, VTP (v1&v2), and 802.1Q,

Native VLAN
,<br><br>
Lesson 13: Configure, verify, and troubleshoot STP protocols<br><br>

STP mode (PVST+ and RPVST+),

STP root bridge selection,

Lesson 14: Configure, verify and troubleshoot STP related optional features,

PortFast,

BPDU guard<br><br>

Lesson 15: Configure and verify Layer 2 protocols<br><br>

Cisco Discovery Protocol,

LLDP.<br><br>

Lesson 16: Configure, verify, and troubleshoot (Layer 2/Layer 3) EtherChannel<br><br>

Static,

PAGP,

LACP.<br><br>

Lesson 17: Describe the routing concepts<br><br>

Packet handling along the path through a network,

Forwarding decision based on route lookup,

Frame rewrite.<br><br>

Lesson 18: Interpret the components of a routing table<br><br>

a Prefix,

Network mask,

Next hop,

Routing protocol code,

Administrative distance
,
Metric
,
Gateway of last resort
.<br><br>
Lesson 19:Describe how a routing table is populated by different routing information sources<br><br>

Administrative distance.<br><br>

Lesson 20:Configure, verify, and troubleshoot inter-VLAN routing<br><br>

Router on a stick,

SVI,

Compare and contrast static routing and dynamic routing,

Compare and contrast distance vector and link state routing protocols,

Compare and contrast interior and exterior routing protocols.<br><br>

Lesson 21:Configure, verify, and troubleshoot IPv4 and IPv6 static routing<br><br>

Default route
,
Network route,

Host route,

Floating static,

Configure, verify, and troubleshoot single area and multi-area OSPFv2 for IPv4 (excluding authentication, filtering, manual summarization, redistribution, stub, virtual-link, and LSAs),

Configure, verify, and troubleshoot single area and multi-area OSPFv3 for IPv6 (excluding authentication, filtering, manual summarization, redistribution, stub, virtual-link, and LSAs),

Configure, verify, and troubleshoot EIGRP for IPv4 (excluding authentication, filtering, manual summarization, redistribution, stub),
,
Configure, verify, and troubleshoot EIGRP for IPv6 (excluding authentication, filtering, manual summarization, redistribution, stub)
,

Troubleshoot basic Layer 3 end-to-end connectivity issues.<br><br>

Lesson 22:Configure and verify PPP and MLPPP on WAN interfaces using local authentication<br><br>

Configure and verify PPP and MLPPP on WAN interfaces using local authentication,

Configure, verify, and troubleshoot PPPoE client-side interfaces using local authentication,

Configure, verify, and troubleshoot GRE tunnel connectivity.<br><br>

Lesson 23:Configure and verify DHCP on a router (excluding static reservations)<br><br>

Server,

Relay,

Client,

TFTP, DNS, and gateway options,

Troubleshoot client- and router-based DHCP connectivity issues.<br><br>

Lesson 24: Configure, verify, and troubleshoot basic HSRP<br><br>

Priority,

Preemption,

Version
.<br><br>
Lesson 25: Configure, verify, and troubleshoot inside source NAT<br><br>

Static,

Pool,

PAT
,
Configure and verify NTP operating in a client/server mode,<br><br>

Lesson 26: Configure, verify, and troubleshoot port security<br><br>

Static
,
Dynamic
,
Sticky
,
Max MAC addresses,

Violation actions,

Err-disable recovery.<br><br>

Lesson 27:Configure, verify, and troubleshoot IPv4 access list for traffic filtering<br><br>

Standard,

Extended
,
Named
,
Verify ACLs using the APIC-EM Path Trace ACL Analysis tool
,<br><br>
Lesson 28: Configure, verify, and troubleshoot basic device hardening<br><br>

Local authentication
,
Secure password,

Access to device,

Source address,

Telnet/SSH,

Login banner
,
Describe device security using AAA with TACACS+ and RADIUS.<br><br>

Lesson 29: Configure and verify device-monitoring protocols<br><br>

SNMPv2,

SNMPv3
,
Syslog
,
Troubleshoot network connectivity issues using ICMP echo-based IP SLA,<br><br>

Lesson 30: Perform device maintenance<br><br>

Cisco IOS upgrades and recovery (SCP, FTP, TFTP, and MD5 verify),

Password recovery and configuration register,

File system management
.



				</p>
				<p class="my-3" >  Price: 10000 -/ BTD</p>
				<p class="my-3" >  Total Class:30 Days</p>
				<p class="my-3" >  Total Hours: 90 hours</p>

			</div>
		</div>
	</div>
</section>

@endsection