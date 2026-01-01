import { NavFooter } from '@/components/nav-footer';
import { NavMain } from '@/components/nav-main';
import { NavUser } from '@/components/nav-user';
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { 
    dashboard, 
    users, 
    partners, 
    bookings, 
    products, 
    orders, 
    reports, 
    withdraw, 
    announcement, 
    role_permissions, 
    chat 
} from '@/routes';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/react';
import { 
    Archive, 
    Bell, 
    BookOpen, 
    Calendar, 
    ChartLine, 
    Folder, 
    LayoutGrid, 
    MessageCircle, 
    ShoppingCart, 
    Unlock, 
    Upload, 
    Users 
} from 'lucide-react';
import AppLogo from './app-logo';

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: dashboard(),
        icon: LayoutGrid,
    },
    {
        title: 'Users',
        href: users(),
        icon: Users,
    },
    {
        title: 'Partners',
        href: partners(),
        icon: Users,
    },
    {
        title: 'Bookings',
        href: bookings(),
        icon: Calendar,
    },
    {
        title: 'Products',
        href: products(),
        icon: Archive,
    },
    {
        title: 'Orders',
        href: orders(),
        icon: ShoppingCart,
    },
    {
        title: 'Reports',
        href: reports(),
        icon: ChartLine,
    },
    {
        title: 'Withdraw',
        href: withdraw(),
        icon: Upload,
    },
    {
        title: 'Announcement',
        href: announcement(),
        icon: Bell,
    },
];

const footerNavItems: NavItem[] = [
    {
        title: 'Role - Permissions',
        href: role_permissions(),
        icon: Users,
    },
    {
        title: 'Live Chat',
        href: chat(),
        icon: MessageCircle,
    },
];

export function AppSidebar() {
    return (
        <Sidebar collapsible="icon" variant="inset">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild>
                            <Link href={dashboard()} prefetch>
                                <AppLogo />
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent>
                <NavMain items={mainNavItems} />
            </SidebarContent>

            <SidebarFooter>
                <NavFooter items={footerNavItems} className="mt-auto" />
                <NavUser />
            </SidebarFooter>
        </Sidebar>
    );
}
